<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use App\Models\Registration;
use App\Exports\ExportStudents;
use App\Models\PaymentRegistration;
use App\Models\PaymentHistory;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function login_admin(){
        return view('admin.login');
    }
    public function verifikasi_berkas(Request $request, $registration_uid, $status)
    {
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
        if (!$data){
            return redirect()->back()->withErrors(['error', 'data dengan nomor registrasi '+$registration_uid+' tidak ditemukan']);
        }else{
            // dd($data);
            if ($status == 'accept'){
                try{
                    $data->student->update(['verify_status' => true]);
                    $data->save();  
                    return redirect()->back()->with('success', 'berhasil verifikasi berkas');
                }catch(\Exception $e){
                    return redirect()->back()->withErrors(['error', $e->getMessage()]);
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'verify_information' => 'required'
                ]);
                try{
                    $data->student->update(['verify_status' => false, 'verify_information' => $request->verify_information]);
                    $data->save();

                    return redirect()->back()->with('success', 'berhasil verifikasi berkas');
                }catch(\Exception $e){
                    return redirect()->back()->withErrors(['error', $e->getMessage()]);
                }
            }
        }
    }

    public function accepting_student(){
        $data = Registration::where('status = ?', 'daftar')->where('students.verify_status = ?', true)->with('student')->get();

        return view('admin.accepting-student', ['data' => $data]);
    }
    public function accept_reject_application(Request $request, $registration_uid, $status){
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
        if(!$data){
            return redirect()->back()->withErrors(['error', 'data dengan nomor registrasi '+$registration_uid+' tidak ditemukan']);
        }else{
            if ($status == 'accept'){
                try{
                    $data->status = 'accept';
                    $data->save();

                    return redirect()->route('admin.create_biaya_pendidikan', ['registration_uid' => $registration_uid]);
                }catch(\Exception $e){
                    return redirect()->back()->withErrors(['error', $e->getMessage()]);
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'status_information' => 'required'
                ]);
                try{
                    $data->status = 'reject';
                    $data->status_information = $request->status_information;
                    $data->save();

                    return redirect()->back()->with('success', 'berhasil mengubah status');
                }catch(\Exception $e){
                    return redirect()->back()->withErrors(['error', $e->getMessage()]);
                }
            }
        }
    }

    public function input_biaya_pendidikan(Request $request, $registration_uid){
        $this->validate($request,[
            'biaya_pendidikan' => 'required|numeric'
        ]);
        try{
            $data = Registration::where("registration_uid", $registration_uid)->first();
    
            $data->amount = $request->biaya_pendidikan;
            $data->save();

            $payment_registration = new PaymentRegistration;
            $payment_registration->registration_uid = $registration_uid;
            $payment_registration->amount = $data->amount;
            $payment_registration->remaining_amount = $data->amount;

            return redirect()->back()->with('success', 'berhasil menambah biaya pendidikan');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function input_pembayaran(Request $request, $registration_uid){
        try{
            $this->validate($request,[
                'amount'
            ]);
            $register_siswa = Registration::where("registration_uid", $registration_uid)->with(['payment_registration', 'payment_history'])->first();
            // add data to eloquent:

            // add to payment_history
            $history = new PaymentHistory;
            $history->registration_id = $register_siswa->id;
            $history->amount = $request->amount;
            $history->save();
            // should add image_url

            // add to payment_registration
            $register_siswa->payment_registration->remaining_amount = ($register_siswa->amount - $request->amount);
            $register_siswa->payment_registration->save();

            $viewData = [
                'registration_id' => $registration_uid,
                'amount' => $history->amount,
                'date' => $history->created_at,
            ];
            $receipt_content = view('admin.payment_receipt', $viewData)->render();
            $history->receipt = $receipt_content;
            $history->save();
            
            return redirect()->back()->with('success', 'berhasil melakukan pembayaran');

        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function create_biaya_pendidikan($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with(['student', 'student.families'])->first();
        return view('admin.input-biaya', ['data' => $data]);
    }

    public function export_students(){
        return Excel::download(new ExportStudents, 'student.xlsx');
    }

    public function unverified_student_data(){
        $data = Student::with('families')->with('registration')->where('verify_status', false)->whereExists(function ($query) {
            $query->select('id')
                  ->from('registrations')
                  ->whereColumn('registrations.student_id', 'students.id');
        })->get();
        return view('admin.unverified-student', ['data' => $data]);
    }

    public function detail_student($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->with('student.families')->first();
        return view('admin.detail-student', ['data' => $data]);
    }

    public function index(){
        return view('admin.content');
    }

    public function pembayaran($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with(['student', 'student.families'])->first();
        return view('admin.input-pembayaran', ['data' => $data]);
    }

    public function create_student(Request $request){
        try{
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'password' => $this->passwordRules(),
            ]);
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 'siswa',
                'password' => Hash::make($request->password),
            ]);

            $this->validate($request, [
                'name' => 'required',
                'nisn' => 'required|numeric',
                'nik' => 'required|numeric|digits:16',
                'date_of_birth' => 'required',
                'gender' => 'required',
                'religion' => 'required',
                'address' => 'required',
                'last_education' => 'required',
                'phone_number' => 'required',
            ]);
            $date_of_birth_student = Carbon::parse($request->date_of_birth);
            $student = Student::create([
                'name' => $request->name,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'date_of_birth' => $date_of_birth_student->format('M d Y'),
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'phone_number' => $request->phone_number,
                'user_id' => $user->id,
                'verify_status' => false
            ]);

            if ($request->name_ibu){
                $date_of_birth_ibu = Carbon::parse($request->date_of_birth_ibu);
                $mother = Family::create([
                    'name' => $request->name_ibu,
                    'nik' => $request->nik_ibu,
                    'date_of_birth' => $date_of_birth_ibu,
                    'gender' => 'perempuan',
                    'religion' => $request->religion_ibu,
                    'address' => $request->address_ibu,
                    'last_education' => $request->last_education_ibu,
                    'phone_number' => $request->phone_number_ibu,
                    'working_as' => $request->working_as_ibu,
                    'income' => $request->income_ibu,
                    'parent_status' => 'ibu',
                    'student_id' => $student->id
                ]);
            }
            if ($request->name_ayah){
                $date_of_birth_ayah = Carbon::parse($request->date_of_birth_ayah);
                $father = Family::create([
                    'name' => $request->name_ayah,
                    'nik' => $request->nik_ayah,
                    'date_of_birth' => $date_of_birth_ayah,
                    'gender' => $request->gender_ayah,
                    'religion' => $request->religion_ayah,
                    'address' => $request->address_ayah,
                    'last_education' => $request->last_education_ayah,
                    'phone_number' => $request->phone_number_ayah,
                    'working_as' => $request->working_as_ayah,
                    'income' => $request->income_ayah,
                    'parent_status' => 'ayah',
                    'student_id' => $student->id
                ]);
            }
            if ($request->name_wali){
                $date_of_birth_wali = Carbon::parse($request->date_of_birth_wali);
                $wali = Family::create([
                    'name' => $request->name_wali,
                    'nik' => $request->nik_wali,
                    'date_of_birth' => $date_of_birth_wali,
                    'gender' => $request->gender_wali,
                    'religion' => $request->religion_wali,
                    'address' => $request->address_wali,
                    'last_education' => $request->last_education_wali,
                    'phone_number' => $request->phone_number_wali,
                    'working_as' => $request->working_as_wali,
                    'income' => $request->income_wali,
                    'parent_status' => 'wali',
                    'student_id' => $student->id
                ]);
            }
            

            $uniqueId = Str::random(10);
            $registration = Registration::create([
                'registration_uid' => $uniqueId,
                'student_id' => $student->id,
                'status' => 'daftar'
            ]);
            return redirect()->back()->with('success', 'berhasil melakukan registrasi siswa');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error_message' => $e->getMessage()]);
        }
    }

    public function register_student(){
        return view('admin.register-student');
    }
}

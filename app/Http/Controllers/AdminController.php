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
        $data = Registration::where('status = ?', 'daftar')->with('student')->get();

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
            // should add image_url
            $history->save();

            // add to payment_registration
            $register_siswa->payment_registration->remaining_amount = ($register_siswa->amount - $request->amount);
            $register_siswa->payment_registration->save();

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
        $data = Student::with('families')->with('registration')->where('verify_status', false)->get();
        return view('admin.unverified-student', ['data' => $data]);
    }

    public function detail_student($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->with('student.families')->first();
        return view('admin.detail-student', ['data' => $data]);
    }

    public function index(){
        return view('admin.content');
    }
}

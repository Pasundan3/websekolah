<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use App\Models\Registration;
use App\Exports\ExportStudents;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function verifikasi_berkas(Request $request, $registration_uid, $status)
    {
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
        if (!$data){
            echo "Data dengan nomor pendaftaran sekian tidak ditemukan";
        }else{
            // dd($data);
            if ($status == 'accept'){
                try{
                    $data->student->update(['verify_status' => true]);
                    $data->save();  

                    echo 'berhasil verifikasi berkas';
                }catch(\Exception $e){
                    echo $e->getMessage();
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'verify_information' => 'required'
                ]);
                try{
                    $data->student->update(['verify_status' => false, 'verify_information' => $request->verify_information]);
                    $data->save();

                    echo "Berhasil update status verifikasi";
                }catch(\Exception $e){
                    echo $e->getMessage();
                }
            }
        }
    }

    public function accepting_student(){
        $data = Registration::where('status != ?', 'accept')->with('student')->get();

        return view('admin.accepting-student', ['data' => $data]);
    }
    public function accept_reject_application(Request $request, $registration_uid, $status){
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
        if(!$data){
            echo "Data dengan nomor pendaftaran sekian tidak ditemukan";
        }else{
            if ($status == 'accept'){
                try{
                    $data->student->update(['verify_status' => true]);
                    $data->save();  

                    echo 'berhasil update status verifikasi';
                    return redirect()->route('admin.create_biaya_pendidikan', ['registration_uid' => $registration_uid]);
                }catch(\Exception $e){
                    echo $e->getMessage();
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'verify_information' => 'required'
                ]);
                try{
                    $data->student->update(['verify_status' => false, 'verify_information' => $request->verify_information]);
                    $data->save();

                    echo "Berhasil update status verifikasi";
                }catch(\Exception $e){
                    echo $e->getMessage();
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

            echo "Berhasil menambahkan biaya pendidikan";
        }catch(\Exception $e){
            echo $e->getMessage();
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

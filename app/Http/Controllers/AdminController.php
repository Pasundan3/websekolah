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
                $data->student->update(['verify_status' => true]);
                $data->status = 'accept';
                $data->save();  

                if ($data){
                    echo "Berhasil update status verifikasi";
                    dd("berhasil update status ");
                    // Should return redirect page to input biaya pendidikan
                }else{
                    echo "Gagal mengupdate status verifikasi";
                    dd($data->errors());
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'verify_information' => 'required'
                ]);
                $data->student->verify_status = false;
                $data->student->verify_information = $request->verify_information;
                $data->save();

                if ($data->wasChanged()){
                    echo "Berhasil update status verifikasi";
                    // Should return redirect page to input biaya pendidikan
                }else{
                    echo "Gagal mengupdate status verifikasi";
                }
            }
        }
    }

    public function input_biaya_pendidikan(Request $request, $registration_uid){
        $this->validate($request,[
            'biaya_pendidikan' => 'required|numeric'
        ]);

        $data = Registration::where("registration_uid", $registration_uid)->first();

        $data->amount = $request->biaya_pendidikan;
        $data->save();

        if ($data->wasChanged()){
            echo "Berhasil update status verifikasi";
            // Should return redirect page to input biaya pendidikan
        }else{
            echo "Gagal mengupdate status verifikasi";
        }
    }

    public function export_students(){
        return Excel::download(new ExportStudents, 'student.xlsx');
    }

    public function unverified_student_data(){
        $data = Student::where('verify_status', false)->with('families')->with('registration')->get();
        foreach($data as $x){
            $x->registration;
            $x->family;
        }
        return view('admin.unverified-student', compact('data'));
    }

    public function detail_student($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->with('student.families')->first();
        dd($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use App\Models\Registration;


class AdminController extends Controller
{
    public function verifikasi_berkas(Request $request, $registration_uid, $status)
    {
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
        if (!$data){
            echo "Data dengan nomor pendaftaran sekian tidak ditemukan";
        }else{
            
            if ($status == 'accept'){
                $data->verify_status = "accept";
                $data->save();  

                if ($data->wasChanged()){
                    echo "Berhasil update status verifikasi";
                    // Should return redirect page to input biaya pendidikan
                }else{
                    echo "Gagal mengupdate status verifikasi";
                }
    
            }else{
                // validate information why application is rejected
                $this->validate($request, [
                    'verify_information' => 'required'
                ]);
                $data->verify_status = "reject";
                $data->verify_information = $request->verify_information;
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
}

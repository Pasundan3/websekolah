<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing.index');
    }

    public function profile(){
        return view('landing.profile.index');
    }
    public function visi_misi(){
        return view('landing.profile.visi-misi');
    }
    public function riwayat_kepala_sekolah(){
        return view('landing.profile.riwayat-kepsek');
    }
    public function struktur_organisasi(){
        return view('landing.profile.stuktur-organisasi');
    }
    public function staff(){
        return view('landing.profile.teacher-staff');
    }
    
    public function kontak(){
        return view('landing.contact');
    }
    public function ppdb(){
        return view('landing.ppdb');
    }
    public function ppdb_by_year(){
        return view('landing.ppdb');
    }
    public function kesiswaan(){
        return view('landing.kesiswaan');
    }

    public function kurikulum(){
        return view('landing.kurikulum');
    }

    public function blog(){
        return view('landing.post.index');
    }
    public function blog_with_id($id){
        return view('landing.post.detail');
    }

    // news sub menu
    public function news(){
        $news = News::all();

        return view('', compact('news'));
    }

    // teacher sub menu
    public function teachers(){
        $teachers = Teacher::all();

        return view('', compact('teachers'));
    }
}

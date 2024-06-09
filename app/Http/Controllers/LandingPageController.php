<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
class LandingPageController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        
        return view('landing.index', compact('news'));
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
        $teachers = Teacher::all();
        return view('landing.profile.teacher-staff', compact('teachers'));
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
        $news = News::all();
        return view('landing.post.index', compact('news'));
    }
    public function blog_with_id($id){
        $newsItem = News::findOrFail($id);
        return view('landing.post.detail', compact('newsItem'));
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

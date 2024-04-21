<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;

class AdminWebController extends Controller
{
    public function create_post(){
        return view('adminweb.create-post');
    }

    public function create_new_post(Request $request){
        try{
            $request->validate([
                'title' => 'required',
                'content' => 'required'
            ]);
            News::create($request->all());
            return redirect()->back()->with('success', 'Create new post successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function edit_post($id){
        $news = News::find($id);
        return view('adminweb.edit-post', compact('news'));
    }

    public function update_post(Request $request, $id){
        try{
            $request->validate([
                'title' => 'required',
                'content' => 'required'
            ]);
            $news = News::find($id);
            $news->update($request->all());
            return redirect()->back()->with('success', 'Update post successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function delete_post($id){
        try{
            $news = News::find($id);
            $news->delete();
            return redirect()->back()->with('success', 'Delete post successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function index_posts(){
        $news = News::all();
        return view('adminweb.list-post', compact('news'));
    }

    public function detail_post($id){
        $news = News::find($id);
        return view('adminweb.show-post', compact('news'));
    }

    public function upload_image(Request $request){
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);

            $ckeditor = $request->input('CKEditorFuncNum');
            $url = asset('uploads/' . $fileName); 
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";
            
            @header('Content-type: text/html; charset=utf-8'); 
            return $response;
        }
    }

    public function create_teacher(){
        return view('adminweb.create-teacher');
    }

    public function create_new_teacher(Request $request){
        try{
            $request->validate([
                'name' => 'required',
                'file' => [
                    'required',
                    'file',
                    'image',
                ],
            ]);
            $url = "";
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
    
                $file->move(public_path('uploads'), $fileName);
                $url = asset('uploads/' . $fileName); 
            }
            Teacher::create([
                'name' => $request->name,
                'position' => $request->position,
                'subject' => $request->subject,
                'image_url' => $url,
                'nip' => $request->nip
            ]);
            return redirect()->back()->with('success', 'Create new post successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function edit_teacher($id){
        $teacher = Teacher::find($id);
        return view('adminweb.edit-teacher', compact('teacher'));
    }
    public function update_teacher(Request $request, $id){
        try{
            $request->validate([
                'name' => 'required',
                'file' => [
                    'required',
                    'file',
                    'image',
                ],
            ]);
            $teacher = Teacher::find($id);
            $url = "";
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
    
                $file->move(public_path('uploads'), $fileName);
                $url = asset('uploads/' . $fileName); 
            }
            $teacher->update([
                'name' => $request->name,
                'position' => $request->position,
                'subject' => $request->subject,
                'image_url' => $url,
                'nip' => $request->nip
            ]);
            return redirect()->back()->with('success', 'Update post successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function delete_teacher($id){
        try{
            $teacher = Teacher::find($id);
            $teacher->delete();
            return redirect()->back()->with('success', 'Delete teacher successfully');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

    public function index_teachers(){
        $teacher = Teacher::all();
        return view('adminweb.list-teacher', compact('teacher'));
    }

    public function detail_teacher($id){
        $teacher = Teacher::find($id);
        return view('adminweb.show-teacher', compact('teacher'));
    }
}

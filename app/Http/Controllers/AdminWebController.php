<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

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
}

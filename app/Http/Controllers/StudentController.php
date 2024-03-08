<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'nik' => $request->nik,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'address' => $request->address,
            'last_education' => $request->last_education,
            'user_id' => Auth::id()
        ]);

        return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = User::with('student')->find(Auth::id());

        if (!$user || !$user->student){
            abort(404);
        }

        return view('xxx', ['student' => $user->student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // should return edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $student = Student::firstOrFail($id);

            $student->update([
                'name' => $request->name,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'last_education' => $request->last_education,
            ]);

        }catch(\Exception $e){
            // Should return error
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $student = Student::findOrFail($id);
            $student->delete();
        }catch(\Exception $e){
            // should return error
        }
    }
}

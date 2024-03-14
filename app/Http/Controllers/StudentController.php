<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Registration;
use Illuminate\Support\Str;

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
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $student = Student::create([
                'name' => $request->name,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'date_of_birth' => Carbon::parse("20-12-03"),
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'phone_number' => $request->phone_number,
                'user_id' => 1,
                'verify_status' => false
            ]);

            $uniqueId = Str::random(10);
            $registration = Registration::create([
                'registration_uid' => $uniqueId,
                'student_id' => $student->id,
                'status' => 'daftar'
            ]);

            return view('xxx', ['student' => $student, 'registration'=>$registration]);
        }catch(\Exception $e){
            dd($e);
        }

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
                'date_of_birth' => Carbon::parse("20-12-03"),
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'phone_number' => $request->phone_number,
                'user_id' => 1,
                'verify_status' => false
            ]);

            return view('xxx', ['student' => $student]);

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

            return view('xxx')->with(['success' => 'Delete student successfully']);
        }catch(\Exception $e){
            return view('xxx')->with(['error' => 'there is an error']);
        }
    }
}

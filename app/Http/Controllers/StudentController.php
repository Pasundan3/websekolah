<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Registration;
use Illuminate\Support\Str;
use App\Models\Family;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'name' => 'required',
                'nisn' => 'required|numeric',
                'nik' => 'required|numeric|digits:16',
                'date_of_birth' => 'required',
                'gender' => 'required',
                'religion' => 'required',
                'address' => 'required',
                'last_education' => 'required',
                'phone_number' => 'required',
            ]);
            $date_of_birth_student = Carbon::parse($request->date_of_birth);
            $student = Student::create([
                'name' => $request->name,
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'date_of_birth' => $date_of_birth_student->format('M d Y'),
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'phone_number' => $request->phone_number,
                // user id must be logging in, jadi nanti ganti jadi user_id login
                // 'user_id' => auth()->id(),
                'user_id' => auth()->id(),
                'verify_status' => false
            ]);

            if ($request->name_ibu){
                $date_of_birth_ibu = Carbon::parse($request->date_of_birth_ibu);
                $mother = Family::create([
                    'name' => $request->name_ibu,
                    'nik' => $request->nik_ibu,
                    'date_of_birth' => $date_of_birth_ibu,
                    'gender' => 'perempuan',
                    'religion' => $request->religion_ibu,
                    'address' => $request->address_ibu,
                    'last_education' => $request->last_education_ibu,
                    'phone_number' => $request->phone_number_ibu,
                    'working_as' => $request->working_as_ibu,
                    'income' => $request->income_ibu,
                    'parent_status' => 'ibu',
                    'student_id' => $student->id
                ]);
            }
            if ($request->name_ayah){
                $date_of_birth_ayah = Carbon::parse($request->date_of_birth_ayah);
                $father = Family::create([
                    'name' => $request->name_ayah,
                    'nik' => $request->nik_ayah,
                    'date_of_birth' => $date_of_birth_ayah,
                    'gender' => $request->gender_ayah,
                    'religion' => $request->religion_ayah,
                    'address' => $request->address_ayah,
                    'last_education' => $request->last_education_ayah,
                    'phone_number' => $request->phone_number_ayah,
                    'working_as' => $request->working_as_ayah,
                    'income' => $request->income_ayah,
                    'parent_status' => 'ayah',
                    'student_id' => $student->id
                ]);
            }
            if ($request->name_wali){
                $date_of_birth_wali = Carbon::parse($request->date_of_birth_wali);
                $wali = Family::create([
                    'name' => $request->name_wali,
                    'nik' => $request->nik_wali,
                    'date_of_birth' => $date_of_birth_wali,
                    'gender' => $request->gender_wali,
                    'religion' => $request->religion_wali,
                    'address' => $request->address_wali,
                    'last_education' => $request->last_education_wali,
                    'phone_number' => $request->phone_number_wali,
                    'working_as' => $request->working_as_wali,
                    'income' => $request->income_wali,
                    'parent_status' => 'wali',
                    'student_id' => $student->id
                ]);
            }
            

            $uniqueId = Str::random(10);
            $registration = Registration::create([
                'registration_uid' => $uniqueId,
                'student_id' => $student->id,
                'status' => 'daftar'
            ]);
            return redirect()->route('student.show', ['registration_uid' => $uniqueId]);
            
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error_message' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($registration_uid)
    {
        $data = Registration::where('registration_uid', $registration_uid)->with('student')->with('student.families')->first();
        return view('student.show', ['data' => $data]);
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

    public function check_registration(Request $request){
        try{
            $this->validate($request, [
                'registration_uid' => 'required'
            ]);
            $registration_uid = $request->registration_uid;
            $data = Registration::where('registration_uid', $registration_uid)->with('student')->first();
            return view('student.check-registration', ['data' => $data]);
        }catch(\Exception $e){
            return view('student.check-registration')->withErrors(['error', $e->getMessage()]);
        }
    }

    public function check_registration_view(){
        return view('student.check-registration');
    }

    public function check_remaining_amount($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with('payment_registration')->first();
        return view('student.check-remaining-amount', ['data' => $data]);
    }

    public function check_payment_history($registration_uid){
        $data = Registration::where('registration_uid', $registration_uid)->with('payment_histories')->first();
        return view('student.check-payment-histories', ['data' => $data]);
    }

    public function pay_remaining_amount(Request $request, $registration_uid){
        try{
            $this->validate($request, [
                'amount' => 'required'
            ]);

            $data = Registration::where('registrations.registration_uid', $registration_uid)->with('payment_registration')->first();
            if ($data->payment_registration->remaining_amount > 0){

                $payment_history = PaymentHistory::create([
                    'registration_id' => $data->id,
                    'amount' => $request->amount
                ]);
                $remaining_amount = $data->payment_registration->remaining_amount - $request->amount;
                if ($remaining_amount <= 0){
                    $data->payment_registration->remaining_amount = 0;
                    $data->save();
                } 
            }
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        }
    }

}

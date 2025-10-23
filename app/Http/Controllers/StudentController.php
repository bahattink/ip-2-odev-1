<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
public function index(){
    $students = Student::paginate(2);
    return view('student.index', compact('students'));
}
public function create()
{
    return view('student.create');
}
public function store(Request $request){
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'city' => 'required',
    ]);

    $student = new Student();
    $student-> first_name = $request->input(['first_name']);
    $student-> last_name = $request->input(['last_name']);
    $student-> city = $request->input(['city']);
    $student-> save();

    return redirect()->route('student.index');
}
}

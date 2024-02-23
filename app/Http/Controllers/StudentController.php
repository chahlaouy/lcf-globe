<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'identifier' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'cin' => 'required',
            'cin_date' => 'required',
            'birth_date' => 'required',
            'certif_date' => 'required',
            'duration' => 'required',
        ]);

        Student::create($data);

        return redirect()->to('/dashboard');
    }


    public function destroy(Request $request, Student $student)
    {
        $student->delete();
        return redirect()->to('/dashboard');
    }
}

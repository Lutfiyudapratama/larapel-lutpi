<?php

namespace App\Http\Controllers;

use App\Models\ListStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = new ListStudent();
        $data = $students->all();
        return view('students.list', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:100',
            'classes' => 'required|string|max:3|min:1',
            'jurusan' => 'required|string|max:5',
            'birth_date' => 'required|date',
            'photo_profile' => 'required|mimes:jpg,png,svg,jpeg,webp|max:1024',
        ]);

        $time = Carbon::now()->format('Y-m-d H-i-s.');
        $doc = $time . '.' . $request->photo_profile->extension();
        $request->file('photo_profile')->move(public_path('upload/profile'),$doc);

        $student = new ListStudent();
        $student->name = $request->name;
        $student->classes = $request->classes;
        $student->jurusan = $request->jurusan;
        $student->birth_date = $request->birth_date;
        $student->photo_profile = url('/upload/profile') . '/' . $doc;
        $student->save();
        return redirect('/list-siswa')->with('success', 'Data Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

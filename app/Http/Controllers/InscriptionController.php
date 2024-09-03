<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Student;
use App\Models\Course;

class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::with('student')->get();
        $inscriptions = Inscription::with('course')->get();
        return view('inscriptions.index', compact('inscriptions'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('inscriptions.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        Inscription::create($request->all());
        return redirect()->route('inscriptions.index')->with('success', 'La inscripción fue creada correctamente');
    }

    public function show(Inscription $inscription)
    {
        return view('inscriptions.show', compact('inscription'));
    }

    public function edit(string $id)
    {
        $students = Student::all();
        $courses = Course::all();
        $inscription = Inscription::findOrFail($id);
        return view('inscriptions.edit', compact('inscription' , 'students', 'courses'));
    }

    public function update(Request $request, string $id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->update($request->all());
        return redirect()->route('inscriptions.index')->with('success', 'La inscripción se ha modificada correctamente');
    }

    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route('inscriptions.index')->with('success', 'La inscripción fue eliminada correctamente');
    }
}

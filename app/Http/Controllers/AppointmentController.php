<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('client')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('appointments.create', compact('clients'));
    }

    public function store(Request $request)
    {
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'La cita fue creada correctamente');
    }

    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    public function edit(string $id)
    {
        $clients = Client::all();
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', compact('appointment' , 'clients'));
    }

    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'La cita se ha modificado correctamente');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'La cita fue eliminada correctamente');
    }
}

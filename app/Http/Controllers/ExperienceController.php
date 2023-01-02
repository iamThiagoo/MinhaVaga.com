<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function create(Request $request) {

        $validated = $request->validate([
            'name'         => 'required|max:200',
            'empresa'      => 'required',
            'type_job'     => 'required|integer',
            'initial_date' => 'required|date',
            'final_date'   => 'date',
            'funcao'       => 'string'
        ]);

        Experience::create([
            'name'           => $validated['name'],
            'user_id'        => Auth::user()->id,
            'empresa'        => $validated['empresa'],
            'type_job_id'    => $validated['type_job'],
            'initial_date'   => $validated['initial_date'],
            'final_date'     => $validated['final_date'],
            'current_work'   => $request['current_work'] == 'on' ? true : false,
            'funcao'         => $validated['funcao']
        ]);

        return redirect()->back();
    }
}

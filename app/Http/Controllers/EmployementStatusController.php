<?php

namespace App\Http\Controllers;

use App\Models\Employement_status;
use Illuminate\Http\Request;

class EmployementStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Employement_status::all();
        return view('employement_status.page' , compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request ->all();
        $status = Employement_status::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employement_status  $employement_status
     * @return \Illuminate\Http\Response
     */
    public function show(Employement_status $employement_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employement_status  $employement_status
     * @return \Illuminate\Http\Response
     */
    public function edit(Employement_status $employement_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employement_status  $employement_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employement_status $employement_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employement_status  $employement_status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Employement_status::find($id);
        $status->delete();
        return back();

    }
}

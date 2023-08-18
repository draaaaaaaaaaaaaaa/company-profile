<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Companie::all();
        return view('company.page', compact('company'));
        
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
        $company = Companie::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(Companie $companie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit(Companie $companie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companie $companie)
    {
        //
    }

    //Edit page
    public function editpage()
    {
        $company = Companie::all();
        return view('company.edit-page', compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companie::find($id);
        $company->delete();
        return back();
    }
}

<?php

namespace Hall\Http\Controllers;

use Illuminate\Http\Request;
use Hall\Depense;

class DepensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depense=Depense::all();
        return response()->json($depense);
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
        $input=$request->all();
        $depesne=Depense::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Hall\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Depense $depense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hall\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Depense $depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hall\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depense $depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hall\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depense $depense)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Maba;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'mabas' => Maba::all()
        ];

        return view('dashboard', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maba  $maba
     * @return \Illuminate\Http\Response
     */
    public function show(Maba $maba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maba  $maba
     * @return \Illuminate\Http\Response
     */
    public function edit(Maba $maba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maba  $maba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maba $maba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maba  $maba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maba $maba)
    {
        //
    }
}

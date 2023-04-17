<?php

namespace App\Http\Controllers;

use App\Models\QRGenerator;
use Illuminate\Http\Request;

class GenerateQRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generateQR');
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
     * @param  \App\Models\QRGenerator  $qRGenerator
     * @return \Illuminate\Http\Response
     */
    public function show(QRGenerator $qRGenerator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QRGenerator  $qRGenerator
     * @return \Illuminate\Http\Response
     */
    public function edit(QRGenerator $qRGenerator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QRGenerator  $qRGenerator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QRGenerator $qRGenerator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QRGenerator  $qRGenerator
     * @return \Illuminate\Http\Response
     */
    public function destroy(QRGenerator $qRGenerator)
    {
        //
    }
}

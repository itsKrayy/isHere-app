<?php

namespace App\Http\Controllers;

use App\Models\QRScan;
use Illuminate\Http\Request;

class QRScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountScanQR');
    }

    public function scan(Request $request)
    {
        $student_id = $request->input('student_id');
        $student_name = $request->input('student_name');
        $department = $request->input('department');
    
        // Process the scanned QR data as needed
    
        return response()->json(['message' => 'QR data processed successfully']);
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
     * @param  \App\Models\QRScan  $qRScan
     * @return \Illuminate\Http\Response
     */
    public function show(QRScan $qRScan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QRScan  $qRScan
     * @return \Illuminate\Http\Response
     */
    public function edit(QRScan $qRScan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QRScan  $qRScan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QRScan $qRScan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QRScan  $qRScan
     * @return \Illuminate\Http\Response
     */
    public function destroy(QRScan $qRScan)
    {
        //
    }
}

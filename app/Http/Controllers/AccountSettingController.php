<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\subs; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = subs::all();
        // $subs = subs::where('is_sub', 1)->get();
        // dump($subs);
        return view('accountSetting', [
            'subs'  => $subs,
            'events'    => events::all()
        ]);
    }

    public function buyReport()
    {
        $sub = [
            'is_sub' => 1
        ];

        subs::create($sub);

        // return redirect('/reports');
        return redirect()->back();
    }

    public function cancelSub()
    {
        DB::table('subs')->truncate();
        return redirect('/menu');
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
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}

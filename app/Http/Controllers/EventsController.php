<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\attendance;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('accountEvents', [
            'events' => events::all(),
            'specific_event' => '',
            'attendance_logs' => ''
        ]);
    }

    public function generatePdf($event_id)
    {
        // Use Eloquent ORM to retrieve the event and its corresponding attendancelogs
        $event = events::findOrFail($event_id);
        $attendancelogs = attendance::where('event_id', $event_id)->get();

        // Pass the data to a view
        $data = [
            'event' => $event,
            'attendancelogs' => $attendancelogs,
        ];
        $view = view('pdf', $data);

        // Use Dompdf to convert the view to a PDF file
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view->render());
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Return the PDF file as a response
        return $dompdf->stream();
    }

    public function event (string $event_id)
    {

        return view('accountEvents', [
            'events' => events::all(),
            'specific_event' => events::find($event_id),
            'attendance_logs' => attendance::find($event_id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accountAddEvent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        events::create($request->all());
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(string $event_id)
    {
        dd();
        return view('accountEvents', [
            'events' => events::all(),
            'specific_event' => events::find($event_id),
            'attendance_logs' => attendance::find($event_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events, String $id)
    {
        //

        $logs = attendance::all()->where('event_id', $id);
        $event = events::find($id);

        return view('accountAttendance', [
            'event' => $event,
            'logs' => $logs
            
        ]);

        // $user = DB::table('attendancelogs')->where('event_id', $id);

        // return $user;
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
    public function destroy($id)
    {
        events::destroy($id);
        return back();
    }
}

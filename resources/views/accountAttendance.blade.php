@extends('layouts.layout')

@section('content')
<div class="crud-container">
    <div class="row">

      <div class="col-md-9">
        <div class="main-content">
          <a href="{{ url('/events') }}" class="btn btn-primary" >back</a>
          <h2>Event Name: {{ $event->event_name }}</h2>
          <p>Event Date: {{ $event->event_date }}</p>

          
            <h5>Attendance Table</h5>
          <a href="{{ url('/attendance/addlog/'.$event->id) }}"><button type="button" class="btn btn-primary mb-3" id="add-attendance-form-btn" data-bs-toggle="modal fade" data-bs-target="#addAttendanceModal">Add Attendance Log (Form)</button></a>
          <a href=" {{ url('/scan-qr') }} "><button id="start-scanner"  class="btn btn-primary mb-3" >Add Attendance Log (QR)</button></a>
         
          <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Department</th>
                    <th>Time In</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log->student_id }}</td>
                    <td>{{ $log->student_name }}</td>
                    <td>{{ $log->department }}</td>
                    <td>{{ $log->time_in }}</td>
                    <td>
                        <form action="{{ url('/attendance/'.$log->id) }}" method="post">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-sm btn-danger"><a type="submit" class="delete">Delete</a></button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

                
          

        </div>
      </div>

      <!-- Modal box to display the scanned QR value -->
      <div id="qr-value-modal" style="display: none;">
        
          <!-- HTML code to display the video stream from the camera -->
          <video id="camera" style="width: 100%; height: auto;"></video>

        <p id="qr-value"></p>
        <button id="add-to-database">Add to Database</button>
        <button id="close-modal">Close</button>
      </div>

      

    </div>
  </div>

@endsection

@extends('layouts.layout')

@section('content')
     <div class="" id="addAttendanceModal" tabindex="-1" aria-labelledby="addAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="addAttendanceModalLabel">Add Attendance Log to {{ $event->event_name }} </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/attendance') }}" method="post"  >
                {!! csrf_field() !!}
            <div class="modal-body" >
                <div class="mb-3" hidden>
                    <label for="school_id" class="form-label">Event ID</label>
                    <input type="text" class="form-control" id="event_id" name="event_id" value="{{ $event_id }}" required>
                </div>
                <div class="mb-3">
                <label for="school_id" class="form-label">School ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
                </div>
                <div class="mb-3">
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="student_name" name="student_name" required>
                </div>
                <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
                </div>
                <div class="mb-3">
                    <label for="school_id" class="form-label">time_in</label>
                    <input type="time" class="form-control" id="time_in" name="time_in" value="{{ now()->format('H:i:s') }}">
                </div>
              </div>
                <div class="modal-footer">
                  <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary" >Close</button></a>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
                
            </form>
        </div>
        </div>
    </div>
@endsection
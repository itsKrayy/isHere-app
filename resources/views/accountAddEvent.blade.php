@extends('layouts.layout')

@section('content')
<div class="" id="addAttendanceModal" tabindex="-1" aria-labelledby="addAttendanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="addAttendanceModalLabel">Add New Event</h5>
        </div>
        <form action="{{ url('/events') }}" method="post"  >
            {!! csrf_field() !!}
        <div class="modal-body" >
            <div class="mb-3">
            <label for="school_id" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="event_name" name="event_name" required>
            </div>
            <div class="mb-3">
            <label for="student_name" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="event_date" name="event_date" required>
            </div>
            <div class="mb-3">
            <label for="department" class="form-label">Event Time</label>
            <input type="time" class="form-control" id="event_time" name="event_time" required>
            </div>
            <div class="mb-3">
                <label for="school_id" class="form-label">Event Description</label>
                <input type="text" class="form-control" id="event_desc" name="event_desc">
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
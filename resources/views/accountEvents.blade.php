@extends('layouts.layout')

@section('content')
<!-- event list -->
{{-- <div class="event-list">
    <ul>
      <li>
        <a href="#">Event 1</a>
      </li>
      <li>
        <a href="#">Event 2</a>
      </li>
      <li>
        <a href="#">Event 3</a>
      </li>
    </ul>
  </div> --}}

  {{-- <div>
    <section>
      <input type="text" id="filter" placeholder="Type to filter" />
      <ul id="list" class="List">
              <li>Henry Christensen</li>
              <li>Imelda Silva</li>
              <li>Marah Mueller</li>
              <li>Holly Fitzpatrick</li>
              <li>Lamar Flynn</li>
              <li>Jameson Davidson</li>
              <li>Harper Lynn</li>
              <li>Keith Woods</li>
              <li>Cally Dominguez</li>
              <li>Carter Gould</li>
              <li>Brenna Sutton</li>
              <li>Robert Vang</li>
              <li>Lane Shepard</li>
              <li>Ila Shepard</li>
              <li>Madaline Mccarthy</li>
              <li>Raya King</li>
              <li>Tara Schroeder</li>
              <li>Paloma Bryan</li>
              <li>Trevor Heath</li>
              <li>Raymond Vega</li>
              <li>Nyssa Mcleod</li>
              <li>Zachary Deleon</li>
              <li>Guy Morales</li>
              <li>Gannon Kline</li>
              <li>Clare Floyd</li>
            </ul>
        </section>
  </div> --}}
  
{{-- <x-event-c-r-u-d-component> --}}


  {{-- JUST TRY --}}

  {{-- <div class="row">
    <div class="col-md-3">
        <!-- Sidebar HTML code -->
        <div class="event-list">
          <ul>
            @foreach ($events as $event)
              <li>
                <a href="{{ url('/events/'.$event->id.'/show') }}">{{ $event->event_name }}</a>
              </li>
            @endforeach
          </ul>
        </div>
    </div>
    <div class="col-md-9"> --}}
        {{-- @include('components.event-c-r-u-d-component' ) --}}
        {{-- <x-event-c-r-u-d-component :attendance_logs="$attendance_logs" event="$events" />
    </div>
</div> --}}
<h2>Events</h2>
<div class="flex-container">

  @foreach ($events as $event)
    <div class="event-card">
      <h3 class="event-name"><a href="{{ url('/events/'.$event->id.'/edit') }}"> {{ $event->event_name }} </a></h3>
      <p class="event-description"> {{ $event->event_date }} </p>
      <p class="event-description"> {{ $event->event_desc }} </p>
    </div>
  @endforeach

  <div class="event-card">
    <p class="event-name"><a href="{{ url('/events/create') }}"> Create New Event</a></p>
      <h1>+</h1>
  </div>
  

</div>



@endsection
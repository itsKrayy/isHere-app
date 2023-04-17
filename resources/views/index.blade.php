@extends('layouts.layout')

@section('content')

<div class="flex-container">
    <div class="event-card">
        <h3 class="event-name"><a href="#">Events</a></h3>
        <p class="event-description">Browse through your Events and Attendances.</p>
    </div>

    <div class="event-card">
        <h3 class="event-name"><a href="#">Reports</a></h3>
        <p class="event-description">Generate Reports for Events.</p>
    </div>

    <div class="event-card">
        <h3 class="event-name"><a href="#">Account</a></h3>
        <p class="event-description">See Account Dashboard and Settings</p>
    </div>

    <div class="event-card">
        <h3 class="event-name"><a href="#">Generate QR</a></h3>
        <p class="event-description">Make QR Code for Scanning</p>
    </div>
  </div>
  

    

@endsection
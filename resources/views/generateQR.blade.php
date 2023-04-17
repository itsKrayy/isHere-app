@extends('layouts.layout')

@section('content')
<h1>Generate QR Code</h1>
    <div class="form-container">
      <form>
        <label class="form-label" for="school-id">School ID:</label>
        <input class="form-input" type="text" id="school-id" name="school-id" required>

        <label class="form-label" for="student-name">Student Name:</label>
        <input class="form-input" type="text" id="student-name" name="student-name" required>

        <label class="form-label" for="department">Department:</label>
        <input class="form-input" type="text" id="department" name="department" required>

        <button class="form-button" type="submit">Generate QR Code</button>
      </form>
      <div class="qr-code-container">
        <p class="qr-code-label">Generated QR Code</p>
      </div>
    </div>
@endsection
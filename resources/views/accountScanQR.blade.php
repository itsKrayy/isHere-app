@extends('layouts.layout')

@section('content')
    <h3>QR SCANNER</h3>

    <h4>This Feature is not yet available</h4>
    <p>Still trying to develop this feature for the web application version</p>
    <a href="{{ url()->previous() }}">Go Back</a>
    {{-- <div id="scanner-container">
        <div id="camera"></div>
        <div id="qr-data"></div>
    </div>
    
    <form id="qr-form" action="{{ url('/scan-qr/scan') }}" method="POST">
        @csrf
        <input type="hidden" name="student_id" id="student_id">
        <input type="hidden" name="student_name" id="student_name">
        <input type="hidden" name="department" id="department">
    </form> --}}

    {{-- <script>
   // Initialize the QR scanner and fill in the input fields with the scanned data
var scanner = new ZXing.BrowserMultiFormatReader();
scanner.decodeFromInputVideoDevice(null, 'camera').then(function(result) {
    var qrData = JSON.parse(result.text);
    document.getElementById('student_id').value = qrData.student_id;
    document.getElementById('student_name').value = qrData.student_name;
    document.getElementById('department').value = qrData.department;
    document.getElementById('qr-data').textContent = result.text;
    document.getElementById('scanner-container').style.display = 'none';
    document.getElementById('qr-form').style.display = 'block';

    // Use AJAX to submit the form to the Laravel 8 controller
    var formData = new FormData(document.getElementById('qr-form'));
    $.ajax({
        url: $('#qr-form').attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            // Handle the response from the Laravel 8 controller
        },
        error: function(xhr) {
            console.log(xhr.responseText);
            // Handle any errors that occurred during the AJAX request
        }
    });
}).catch(function(error) {
    console.log(error);
    // Handle any errors that occurred during the QR scanning process
});

    </script> --}}
@endsection
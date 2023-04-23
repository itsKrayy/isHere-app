@extends('layouts.layout')

@section('content')
<h1>Generate QR Code</h1>
    <div class="form-container">
    <form>
      <label for="school-id">School ID:</label>
      <input type="text" id="school-id" name="school-id"><br><br>

      <label for="student-name">Student Name:</label>
      <input type="text" id="student-name" name="student-name"><br><br>

      <label for="department">Department:</label>
      <input type="text" id="department" name="department"><br><br>

      <button type="button" class="qr-button" onclick="generateQR()">Generate QR Code</button>
    </form>

    <div class="qr-code-container">
    </div>

    <script>
      function generateQR() {
        // Get the input values
        const schoolId = document.getElementById('school-id').value;
        const studentName = document.getElementById('student-name').value;
        const department = document.getElementById('department').value;

        // Create the JSON data
        const jsonData = {
          "schoolId": schoolId,
          "studentName": studentName,
          "department": department
        };

        // Encode the JSON data into a URL-encoded string
        const encodedData = encodeURIComponent(JSON.stringify(jsonData));

        // Construct the URL for the QR code image
        const qrCodeUrl = `https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=${encodedData}`;

        // Get the QR code container element
        const qrCodeContainer = document.querySelector('.qr-code-container');

        // Remove any existing QR code image
        qrCodeContainer.innerHTML = '';

        // Create a new image element for the QR code
        const qrCodeImg = document.createElement('img');
        qrCodeImg.src = qrCodeUrl;
        qrCodeImg.alt = 'QR Code';

        // Append the QR code image to the container element
        qrCodeContainer.appendChild(qrCodeImg);

        // Append the label to the container element
        qrCodeContainer.appendChild(qrCodeLabel);
      }
    </script>
    </div>
@endsection
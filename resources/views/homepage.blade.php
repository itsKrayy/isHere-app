<!DOCTYPE html>
<html>
  <head>
    <title>isHere</title>
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
  </head>
  <body>
    <header>
      <h1>isHere</h1>
    </header>
    <main>
      <div class="card">
        <h2>Attendee</h2>
        <p>Fill-In Information to Generate QR for Attendance</p>
        <a href="{{ url('/attendee') }}">Generate QR</a>
      </div>
      <div class="card">
        <h2>Facilitator</h2>
        <p>Manage and Events and Attendance</p>
        <a href="{{ url('/menu') }}">Manage Events</a>
      </div>
    </main>
  </body>
</html>

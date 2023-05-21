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
        <h2>Admin</h2>
        <p>Manage isHere Tenants</p>
        <a href="{{ url('/admin') }}">Manage Tenants</a>
      </div>
    </main>
  </body>
</html>

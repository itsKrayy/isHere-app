<div class="crud-container">
    <div class="row">
      {{-- <div class="col-md-3">
        <div class="sidebar">
          <h2>Events</h2>
          <button class="add-event-btn">Add Event</button>
          <ul>
            <li class="event" ><a href="#">Event 1</a></li>
            <li class="event" ><a href="#">Event 2</a></li>
            <li class="event" ><a href="#">Event 3</a></li>
            <li class="event" ><a href="#">Event 4</a></li>
            <li class="event" ><a href="#">Event 5</a></li>
          </ul>
        
        </div>
      </div> --}}
      <div class="col-md-9">
        <div class="main-content">
          <h2>Event Name: </h2>
          <p>Event Date: </p>
          
            <h5>Attendance Table</h5>
          <button class="btn btn-primary" id="add-attendance-form-btn">Add Attendance Log (Form)</button>
          <button class="btn btn-primary" id="add-attendance-qr-btn">Add Attendance Log (QR)</button>
          {{-- <table class="table">
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
                <tr>
                  <td>001</td>
                  <td>John Doe</td>
                  <td>Computer Science</td>
                  <td>9:00 AM</td>
                  <td>
                    <button>Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Jane Smith</td>
                  <td>Business Administration</td>
                  <td>9:15 AM</td>
                  <td>
                    <button>Delete</button>
                  </td>
                </tr>
                <!-- More rows here -->
              </tbody>
          </table> --}}
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
                {{-- @foreach($attendanceLogs as $log)
                <tr>
                    <td>{{ $log->student_id }}</td>
                    <td>{{ $log->student_name }}</td>
                    <td>{{ $log->department }}</td>
                    <td>{{ $log->time_in }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach --}}
                <td>002</td>
                  <td>Jane Smith</td>
                  <td>Business Administration</td>
                  <td>9:15 AM</td>
                  <td>
                    <button>Delete</button>
                  </td>
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
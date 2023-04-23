<!-- event/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Event Attendance Report</title>
    <style>
        /* CSS styles for the PDF report */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Event Attendance Report</h1>
    <h2>Event Name: {{ $event->event_name }}</h2>
    <p>Date: {{ $event->event_date }}</p>
    <p>Description: {{ $event->event_desc }}</p>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Department</th>
                <th>Time In</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendancelogs as $attendancelog)
                <tr>
                    <td>{{ $attendancelog->student_id }}</td>
                    <td>{{ $attendancelog->student_name }}</td>
                    <td>{{ $attendancelog->department }}</td>
                    <td>{{ $attendancelog->time_in }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

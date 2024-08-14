<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .center-text {
            text-align: center;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .table td {
            text-align: center;
        }
        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table tr:hover {
            background-color: #ddd;
        }
        .table-container {
            margin-top: 20px;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .btn-back, .btn-next, .btn-home {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .btn-back:hover, .btn-next:hover, .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <div class="center-text">
                <h4>Here's an overview of your academic information:</h4>
            </div>
            <div class="table-container">
                <h3>Course Overview</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Instructor</th>
                            <th>Credits</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Math </td>
                            <td>Prof. John Doe</td>
                            <td>3</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>Physics </td>
                            <td>Prof. Jane Smith</td>
                            <td>4</td>
                            <td>B+</td>
                        </tr>
                        <tr>
                            <td>Chemistry </td>
                            <td>Prof. Richard Roe</td>
                            <td>3</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>Biology</td>
                            <td>Prof. Richard Roe</td>
                            <td>3</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>MIL</td>
                            <td>Prof. Richard Roe</td>
                            <td>3</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Prof. Richard Roe</td>
                            <td>2</td>
                            <td>B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-container">
                <h3>Upcoming Events</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Assignment 1 Due</td>
                            <td>10th Aug</td>
                            <td>Submit via portal</td>
                        </tr>
                        <tr>
                            <td>Midterm Exam</td>
                            <td>15th Aug</td>
                            <td>Exam hall A</td>
                        </tr>
                        <tr>
                            <td>Project Submission</td>
                            <td>20th Aug</td>
                            <td>Submit to Prof. Smith</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-container">
                <h3>Recent Activities</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Submitted Assignment 2</td>
                            <td>5th Aug</td>
                            <td>Completed on time</td>
                        </tr>
                        <tr>
                            <td>Attended Math Lecture</td>
                            <td>3rd Aug</td>
                            <td>Covered Chapters 4-6</td>
                        </tr>
                        <tr>
                            <td>Joined Physics Lab</td>
                            <td>1st Aug</td>
                            <td>Experiment on Newton's Laws</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href="{{ route('loggedin') }}" class="btn-back">Back</a>
                <a href="{{ route('loggedin') }}" class="btn-next">Home</a>
                <a href="{{ route('attendance') }}" class="btn-next">Next</a>
            </div>
        </div>
    </div>
</body>
</html>

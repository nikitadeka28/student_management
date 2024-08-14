<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE 6th Semester Timetable</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            background-color: #2c3e50;
            color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar .left a {
            color: white;
            text-decoration: none;
            font-size: 1.5em;
            font-weight: bold;
        }
        .navbar .left a:hover {
            color: #1abc9c;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #ecf0f1;
        }
        .content h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        .table-container {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #bdc3c7;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #34495e;
            color: white;
        }
        td {
            background-color: #ecf0f1;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #1abc9c;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #16a085;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="left">
            <a href="{{ route('loggedin') }}">Back</a>
        </div>
    </div> 
    <div class="content">
        <h1>CSE 6th Semester Timetable</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>8 AM - 9 AM</th>
                        <th>9 AM - 10 AM</th>
                        <th>10 AM - 11 AM</th>
                        <th>11 AM - 12 PM</th>
                        <th>12 PM - 1 PM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>CD</td>
                        <td>CN</td>
                        <td>CN LAB</td>
                        <td>MINI PROJECT</td>
                        <td>MINI PROJECT</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DMIN</td>
                        <td>CD</td>
                        <td>EXTRA CLASS</td>
                        <td>CN</td>
                        <td>CN LAB</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>CN</td>
                        <td>MINI PROJECT</td>
                        <td>DMIN</td>
                        <td>CD</td>
                        <td>EXTRA CLASS</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>CN</td>
                        <td>CN LAB</td>
                        <td>CD</td>
                        <td>MINI PROJECT</td>
                        <td>DMIN</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>EXTRA CLASS</td>
                        <td>CN</td>
                        <td>MINI PROJECT</td>
                        <td>CN LAB</td>
                        <td>DMIN</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil 4th Semester Timetable</title>
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
            background-color: #2c3e50;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-left: 10px;
            border-radius: 4px;
            background-color: #34495e;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: #1abc9c;
        }
        .back-button {
            margin: 10px;
            background-color: #34495e;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #1abc9c;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ecf0f1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #bdc3c7;
            text-align: center;
        }
        th {
            background-color: #34495e;
            color: white;
        }
        td {
            background-color: #ffffff;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/loggedin') }}" class="back-button">Back</a>
    </div>
    <div class="content">
        <h1>Civil 4th Semester Timetable</h1>
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
                    <td>UHV</td>
                    <td>Fluid Mechanics</td>
                    <td>Presentation</td>
                    <td>Building Const & Planning</td>
                    <td>Drawing</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>Lab</td>
                    <td>UHV</td>
                    <td>Fluid Mechanics</td>
                    <td>Presentation</td>
                    <td>Building Const & Planning</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Drawing</td>
                    <td>Lab</td>
                    <td>UHV</td>
                    <td>Fluid Mechanics</td>
                    <td>Presentation</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Building Const & Planning</td>
                    <td>Drawing</td>
                    <td>Lab</td>
                    <td>UHV</td>
                    <td>Fluid Mechanics</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>Presentation</td>
                    <td>Building Const & Planning</td>
                    <td>Drawing</td>
                    <td>Lab</td>
                    <td>UHV</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

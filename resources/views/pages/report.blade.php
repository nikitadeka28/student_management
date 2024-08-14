<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
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
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }
        .center-text {
            text-align: center;
            margin-bottom: 20px;
        }
        .table-container {
            overflow-x: auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
        }
        .table th {
            background-color: #34495e;
            color: white;
        }
        .table td {
            text-align: center;
        }
        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table tr:hover {
            background-color: #f1c40f;
        }
        .button-container {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            width: 50%; 
            margin: 30px auto 0 auto;
        }
        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s;
            font-size: 16px;
            flex: 1;
        }
        .btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Report</h1>
    </div>
    <div class="container">
        <div class="content">
            <div class="center-text">
                <h4>Overview of Student Report</h4>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Instructor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Report data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href="{{ route('attendance') }}" class="btn">Back</a>
                <a href="{{ route('loggedin') }}" class="btn">Home</a>
                <a href="{{ route('help') }}" class="btn">Next</a>
            </div>
        </div>
    </div>
</body>
</html>


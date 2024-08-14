<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            justify-content: flex-end;
            background-color: #2c3e50;
            color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar .right a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-left: 10px;
            border-radius: 4px;
            background-color: #34495e;
            transition: background-color 0.3s;
        }
        .navbar .right a:hover {
            background-color: #1abc9c;
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
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="right">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    </div> 
    <div class="content">
        <h1>Welcome to Student Management System</h1>
    </div>
</body>
</html>


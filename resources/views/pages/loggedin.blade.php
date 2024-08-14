<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In Page</title>
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
        .navbar-links {
            display: flex;
        }
        .navbar-links a {
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: #34495e;
            border-radius: 4px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        .navbar-links a:hover {
            background-color: #1abc9c;
        }
        .logout {
            display: flex;
            align-items: center;
        }
        .email-display {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border-radius: 4px;
            margin-right: 10px;
            font-weight: bold;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #e74c3c;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-links">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('attendance') }}">Attendance</a>
        <a href="{{ route('report') }}">Report</a>
        <a href="{{ route('help') }}">Help/Support</a>
    </div>
    <div class="logout">
        @auth
        <div>
            {{Auth::user()->email}}
        </div>
        @endauth
        {{-- @if(session()->has('user'))
            <div class="email-display">
                {{ session('user')->email }}
            </div>
        @else
            <div class="email-display">
                No user data available.
            </div>
        @endif --}}

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    </div>
</div>

</body>
</html>

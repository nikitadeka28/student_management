<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* The existing CSS remains unchanged */
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
            align-items: center;
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
        }

        .navbar .left {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar .right a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 5px;
            background-color: #34495e;
            transition: background-color 0.3s ease;
        }

        .navbar .right a:hover {
            background-color: #1abc9c;
        }

        .content {
            padding: 50px 20px;
            text-align: center;
            background-color: #ecf0f1;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            border: 1px solid #bdc3c7;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #1abc9c;
            outline: none;
            box-shadow: 0 0 8px rgba(26, 188, 156, 0.2);
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 4px;
            background-color: #1abc9c;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #16a085;
        }

        .register-link {
            margin-top: 20px;
            font-size: 14px;
            color: #7f8c8d;
            text-align: center;
        }

        .register-link a {
            color: #1abc9c;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #16a085;
        }

        #semester-group {
            display: none;
            margin-top: 20px;
        }
    </style>
    <script>
        function showSemesterDropdown() {
            var department = document.getElementById("department").value;
            var semesterGroup = document.getElementById("semester-group");
            var dashboardType = document.getElementById("dashboard_type");

            if (department) {
                semesterGroup.style.display = "block";
            } else {
                semesterGroup.style.display = "none";
                dashboardType.value = "";
            }
        }

        function updateDashboardType() {
            var department = document.getElementById("department").value;
            var semester = document.getElementById("semester").value;
            var dashboardType = document.getElementById("dashboard_type");

            if (department && semester) {
                dashboardType.value = department + " " + semester;
            } else {
                dashboardType.value = "";
            }
        }
    </script>
</head>
<body>
    <div class="navbar">
        <div class="left">
            <a href="home" style="color: white;">Home</a>
        </div>
        <div class="right">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <div class="content">
        <h1>Login to Your Account</h1>
        <div class="form-container">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    @error('email')
                    {{$message}}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="department">Dashboard type:</label>
                    <select name="department" id="department" onchange="showSemesterDropdown()" required>
                        <option value="">Select Dashboard Type</option>
                        <option value="civil">Civil</option>
                        <option value="cse">CSE</option>
                        <option value="mechanical">Mechanical</option>
                        <option value="instru">Instrumentation</option>
                        <option value="electrical">Electrical</option>
                    </select>
                </div>
                <div class="form-group" id="semester-group">
                    <label for="semester">Select Semester:</label>
                    <select name="semester" id="semester" onchange="updateDashboardType()" required>
                        <option value="">Select Semester</option>
                        <option value="3rd sem">3rd sem</option>
                        <option value="4th sem">4th sem</option>
                        <option value="5th sem">5th sem</option>
                        <option value="6th sem">6th sem</option>
                        <option value="7th sem">7th sem</option>
                        <option value="8th sem">8th sem</option>
                    </select>
                </div>

                <input type="hidden" name="dashboard_type" id="dashboard_type" required>

                <button type="submit" class="btn btn-default">Login</button>
            </form>
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('register') }}">Create one here</a></p>
            </div>
        </div>
    </div>
</body>
</html>

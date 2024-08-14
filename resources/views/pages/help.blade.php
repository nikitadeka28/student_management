<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support</title>
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
        .faq-section {
            margin-top: 20px;
        }
        .faq-item {
            margin-bottom: 20px;
        }
        .faq-question {
            font-weight: bold;
            color: #34495e;
        }
        .faq-answer {
            margin-left: 20px;
            color: #555;
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
        <h1>Help & Support</h1>
    </div>
    <div class="container">
        <div class="content">
            <div class="center-text">
                <h4>Welcome to the Help & Support page</h4>
                <p>If you have any questions or need assistance, please refer to the FAQs below or contact our support team.</p>
            </div>
            <div class="faq-section">
                <h3>Frequently Asked Questions</h3>
                <div class="faq-item">
                    <p class="faq-question">Q1: How do I reset my password?</p>
                    <p class="faq-answer">A: To reset your password, go to the login page and click on "Forgot Password". Follow the instructions to reset your password.</p>
                </div>
                <div class="faq-item">
                    <p class="faq-question">Q2: How do I update my profile information?</p>
                    <p class="faq-answer">A: To update your profile information, log in to your account, go to the profile section, and update your information.</p>
                </div>
                <div class="faq-item">
                    <p class="faq-question">Q3: How do I contact support?</p>
                    <p class="faq-answer">A: You can contact support by emailing us at support@studentmanagementapp.com or calling us at (123) 456-7890.</p>
                </div>
            </div>
            <div class="button-container">
                <a href="{{ route('attendance') }}" class="btn">Back</a>
                <a href="{{ route('loggedin') }}" class="btn">Home</a>
            </div>
        </div>
    </div>
</body>
</html>

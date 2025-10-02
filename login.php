<?php

require_once "classes/student.php";
require_once "classes/admin.php";

session_start();

$student = new Student;
$admin = new Admin;

if (isset($_POST['submit'])) {

    // First try admin login
    $error = $admin->adminLogin($_POST['username'], $_POST['pass']);

    if (!$error) {
        // If not admin, try student
        $error = $student->stu_login($_POST['username'], $_POST['pass']);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #121212ff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            display: flex;
            min-height: 550px;
        }

        .form-container {
            flex: 1;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            color: #000;
            margin-bottom: 0.5rem;
            font-size: 2rem;
        }

        .subtitle {
            color: #666;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            color: #000;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #000;
        }

        .btn {
            width: 100%;
            padding: 0.9rem;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .switch-text {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            font-size: 0.9rem;
        }

        .switch-link {
            color: #000;
            text-decoration: none;
            font-weight: 600;
        }

        .switch-link:hover {
            text-decoration: underline;
        }

        .side-panel {
            flex: 1;
            background: #000;
            color: #fff;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .side-panel h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .side-panel p {
            font-size: 0.95rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .password-toggle {
            position: relative;
        }

        .password-toggle input {
            padding-right: 2.5rem;
        }

        .toggle-icon {
            position: absolute;
            right: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            font-size: 1.2rem;
            user-select: none;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 450px;
            }

            .side-panel {
                padding: 2rem;
                order: -1;
            }

            .side-panel h3 {
                font-size: 1.5rem;
            }

            .side-panel p {
                font-size: 0.85rem;
            }

            .form-container {
                padding: 2rem;
            }

            h2 {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }

            .form-container {
                padding: 1.5rem;
            }

            .side-panel {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div>
                <h2>Welcome Back</h2>
                <p class="subtitle">Login to your account</p>

                <form method="post">
                    <div class="form-group">
                        <label for="loginEmail">Username OR Email</label>
                        <input type="text" id="loginEmail" name="username" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group password-toggle">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" name="pass" placeholder="Enter your password" required>
                        <span class="toggle-icon" onclick="togglePassword('loginPassword')">👁️</span>
                    </div>

                    <button type="submit" name="submit" class="btn">Login</button>
                </form>

                <p class="switch-text">
                    Don't have an account? 
                    <a href="register.php" class="switch-link">Register here</a>
                </p>
            </div>
        </div>

        <div class="side-panel">
            <h3>Join Our Community</h3>
            <p>Access exclusive courses, connect with instructors, and accelerate your learning journey. Start your path to success today!</p>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        // function handleLogin(e) {
        //     e.preventDefault();
        //     const email = document.getElementById('loginEmail').value;
        //     const password = document.getElementById('loginPassword').value;
            
        //     alert(`Login attempted with:\nEmail: ${email}`);
        //     // Add your login logic here
        // }
    </script>
</body>
</html>
<?php

require_once "classes/student.php";

$reg = new Student;

if (isset($_POST['submit'])) {
    $reg->stu_registeration($_POST['username'] , $_POST['useremail'] , $_POST['pass'] , $_POST['course']);
}
else{
    echo "please fill all fields";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        input, select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
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
                <h2>Create Account</h2>
                <p class="subtitle">Sign up to get started</p>

                <form method="post" >
                    <div class="form-group">
                        <label for="registerUsername">Username</label>
                        <input type="text" id="registerUsername" name="username" placeholder="Choose a username" required>
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" name="useremail" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group password-toggle">
                        <label for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" name="pass" placeholder="Create a password" required>
                        <span class="toggle-icon" onclick="togglePassword('registerPassword')">👁️</span>
                    </div>

                    <div class="form-group">
                        <label for="course">Course</label>
                        <select id="course" name="course" required>
                            <option value="">Select a course</option>
                            <option value="web-development">Web Development</option>
                            <option value="mobile-development">Mobile Development</option>
                            <option value="data-science">Data Science</option>
                            <option value="ui-ux-design">UI/UX Design</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="graphic-design">Graphic Design</option>
                        </select>
                    </div>

                    <button type="submit" name="submit" class="btn">Register</button>
                </form>

                <p class="switch-text">
                    Already have an account? 
                    <a href="login.php" class="switch-link">Login here</a>
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

        // function handleRegister(e) {
        //     e.preventDefault();
        //     const username = document.getElementById('registerUsername').value;
        //     const email = document.getElementById('registerEmail').value;
        //     const password = document.getElementById('registerPassword').value;
        //     const course = document.getElementById('course').value;
            
        //     alert(`Registration attempted with:\nUsername: ${username}\nEmail: ${email}\nCourse: ${course}`);
        //     // Add your registration logic here
        // }
    </script>
</body>
</html>
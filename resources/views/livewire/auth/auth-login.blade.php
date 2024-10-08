<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> <!-- SweetAlert CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #A6E3E9, #CBF1F5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 450px;
            border: 2px solid #5DA3FA;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .login-header {
            background: #5DA3FA;
            padding: 20px;
            color: white;
            border-bottom: 2px solid #4A90E2;
        }

        .login-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .login-header p {
            font-size: 16px;
            margin: 0;
        }

        .login-card {
            background-color: #fff;
            padding: 30px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 0px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 18px;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            border-color: #5DA3FA;
            outline: none;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #5DA3FA;
            font-size: 14px;
        }

        .login-button {
            display: block;
            background-color: #5DA3FA;
            color: #fff;
            padding: 15px 0px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #4A90E2;
        }

        .options {
            font-size: 14px;
            color: #5DA3FA;
            margin-top: 10px;
        }

        .options a {
            text-decoration: none;
            color: #5DA3FA;
        }

        .options a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Login</h1>
            <p>Enter your details to login</p>
        </div>
        <div class="login-card">
            <form id="loginForm" onsubmit="return handleLogin(event)">
                <div class="input-group">
                    <input type="text" id="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword()">Show</span>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="options">
                <p>Don't have an account? <a href="{{route('register')}}">Register</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script> <!-- SweetAlert JS -->
    <script>
        // Toggle password visibility
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleText = document.querySelector('.toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleText.textContent = 'Hide';
            } else {
                passwordField.type = 'password';
                toggleText.textContent = 'Show';
            }
        }

        function handleLogin(event) {
            event.preventDefault(); // Prevent form submission

            // SweetAlert for login attempt
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Logged in successfully!',
                showConfirmButton: true
            }).then(() => {
                window.location.href = "{{route('user-dashboard')}}"; // Redirect after alert
            });
        }
    </script>
</body>
</html>

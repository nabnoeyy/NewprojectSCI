<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Mako&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <div class="login-text">Register</div>
        </div>

        <!-- Right Section -->
        <div class="right">
            <div class="logo">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" width="200" height="150">
                <h2>Register</h2>
            </div>

            <form class="form" action="<?php echo site_url('register/submit'); ?>" method="post">
                <div class="input-group">
                    <label for="student_id">Student ID:</label>
                    <div class="input-container">
                        <i class="fas fa-id-card"></i>
                        <input type="text" name="student_id" id="student_id" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="name">Name:</label>
                    <div class="input-container">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="name" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="email">Email:</label>
                    <div class="input-container">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Password:</label>
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                    </div>
                </div>

                <div class="form-footer">
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <button type="submit">Register</button>
                </div>
            </form>

            <div class="extra-links">
                <p>Or Login with
                    <a href="#" class="google-login">
                        <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Google Icon" width="20" height="20" />
                        Google
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
    }

    .container {
        display: flex;
        width: 100%;
        max-width: 1200px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
    }

    .left {
        width: 35%;
        background-image: url('<?php echo base_url("assets/images/head.jpg"); ?>');
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .left .login-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    .right {
        width: 65%;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .logo {
        font-size: 50px;
        font-weight: bold;
        font-family: 'Mako', sans-serif;
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form {
        width: 100%;
        max-width: 400px;
        display: flex;
        flex-direction: column;
    }

    .input-group {
        margin-bottom: 20px;
        width: 100%;
    }

    .input-container {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .input-container i {
        color: #555;
        margin-right: 10px;
    }

    .input-container input {
        border: none;
        outline: none;
        font-size: 16px;
        width: 100%;
    }

    .form label {
        color: #555;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .form button {
        padding: 12px 16px;
        background-color: #1a73e8;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        flex-grow: 1;
        margin-left: 10px;
        font-size: 18px;
        transition: background-color 0.3s;
    }

    .form button:hover {
        background-color: #1666c1;
    }

    .extra-links {
        background-color: #e0f7fa;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        width: 100%;
        max-width: 400px;
        margin: 10px auto;
        border: 2px solid #1a73e8;
    }

    .extra-links a {
        color: #00796b;
        font-weight: bold;
        text-decoration: none;
    }


    .google-icon {
        width: 10px;
        margin-right: 5px;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            max-width: 100%;
            height: auto;
        }

        .left,
        .right {
            width: 100%;
        }

        .left {
            height: 200px;
        }
    }

    .footer {
        background-color: #fff;
        padding: 9px;
        width: 80%;
        text-align: center;
        border-top: 1px solid #ccc;
        margin: 5px auto;
    }
</style>

</html>
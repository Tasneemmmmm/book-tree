<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="design.css">

    <style>
        body {
            background-image: url("photos/iPad\ wallpaper.jfif");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .registration-form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 3px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .box {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 8px; 
            font-size: 14px; 
            background-color: #4d794e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #1a271b;
        }

        a {
            color: rgb(0, 0, 0);
        }
    </style>
    
</head>
<body>
    <div class="registration-form-container">
        <div id="close-registration-btn" class="fas fa-times"></div>
        <form action="">
            <h3>Create New Account</h3>
            <span>Full Name</span>
            <input type="text" name="" class="box" placeholder="Enter your full name" id="">
            <span>User name</span>
            <input type="text" name="" class="box" placeholder="Enter your username" id="">
            <span>Email</span>
            <input type="email" name="" class="box" placeholder="Enter your email" id="">
            <span>phone number</span>
            <input type="phonenum" name="" class="box" placeholder="Enter your phone number" id="">
            <span>Password</span>
            <input type="password" name="" class="box" placeholder="Enter your password" id="">
            <input type="submit" value="Create Account" class="btn">
            <p>Already have an account? <a href="ttheproject.html">Sign in</a></p>
        </form>
    </div>
</body>
</html>

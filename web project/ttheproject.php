<!DOCTYPE html>
<html>
    <head>
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="stylesheet" href="design.css">
            <style>
                body {
                    background-image: url("photos/iPad\ wallpaper.jfif");
                    background-size: cover;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    padding: 0;
                    
                }
        
                .login-form-container {
                    background-color: rgba(255, 255, 255, 0.8);
                    padding: 20px;
                    border-radius: 5px;
                    text-align: center;
                }
        
                .box {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
        
                .checkbox {
                    text-align: left;
                    margin-bottom: 10px;
                }
        
                .btn {
                    width: 100%;
                    padding: 10px;
                    background-color: #689169;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
        
                .btn:hover {
                    background-color: #1e321f;
                }
        
                a {
                    color: rgb(16, 16, 25);
                }
            </style>
        </head>
        <body>
            <div class="login-form-container">
                <div id="close-login-btn" class="fas fa-times"></div>
                <form action="">
                    <h3>Sign In</h3>
                    <span>Username</span>
                    <input type="email" name="email" class="box" placeholder="Enter your email" id="">
                    <span>Password</span>
                    <input type="password" name="password" class="box" placeholder="Enter your password" id="">
                    <div class="checkbox">
                        <input type="checkbox" name="remember-me" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <input type="submit" value="Sign In" class="btn">
                    <p>Forgot password? <a href="homepage.html">Click here</a></p>
                    <p>Don't have an account? <a href="signup.htm">Create one</a></p>

                </form>
            </div>
        </body>
        </html>
        
    </head>
</html>
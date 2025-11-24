<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Poppins, Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff9966, #ff5e62, #845ec2);
            background-size: 300% 300%;
            animation: gradientMove 10s ease infinite;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 35px;
            width: 360px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            backdrop-filter: blur(5px);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 26px;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #444;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #ff5e62;
            box-shadow: 0 0 8px rgba(255,94,98,0.5);
            outline: none;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #845ec2, #ff5e62);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-register:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Create Account</h2>

        <form action="register" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter an email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button class="btn-register" type="submit">Register</button>
        </form>
    </div>
</body>
</html>

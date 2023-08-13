<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div>
    <form method="post">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="button" type="submit" name="login">login</button>
    </form>
    dont have account yet? <a href="/signup">sign up</a>
</div>
</body>
</html>

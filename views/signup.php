<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .strength {
            height: 10px;
            width: 100%;
            background-color: #ddd;
            border-radius: 3px;
            margin-top: 10px;
        }

        .strength-bar {
            height: 10px;
            width: 0;
            border-radius: 3px;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        <!DOCTYPE html>
          <html>
          <head>
          <title>Home</title>
                       <style>
                       body {
                           font-family: Arial, sans-serif;
                           margin: 50px;
                           background-color: #f4f4f4;
                       }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .strength {
            height: 10px;
            width: 100%;
            background-color: #ddd;
            border-radius: 3px;
            margin-top: 10px;
        }

        .strength-bar {
            height: 10px;
            width: 0;
            border-radius: 3px;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
    <script>
      function checkPasswordStrength(password) {
        let strength = 0;
        if (password.length >= 8) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[!@#$%^&*]/.test(password)) strength++;

        return strength;
      }

      function updateStrengthBar(strength) {
        const strengthBar = document.getElementById('strength-bar');
        switch (strength) {
          case 1:
            strengthBar.style.width = '20%';
            strengthBar.style.backgroundColor = 'red';
            break;
          case 2:
            strengthBar.style.width = '40%';
            strengthBar.style.backgroundColor = 'orange';
            break;
          case 3:
            strengthBar.style.width = '60%';
            strengthBar.style.backgroundColor = 'yellow';
            break;
          case 4:
            strengthBar.style.width = '80%';
            strengthBar.style.backgroundColor = 'lightgreen';
            break;
          case 5:
            strengthBar.style.width = '100%';
            strengthBar.style.backgroundColor = 'green';
            break;
          default:
            strengthBar.style.width = '0';
            break;
        }
      }

      function validateForm() {
        const password = document.querySelector('input[name="password"]').value;
        const confirmPassword = document.querySelector('input[name="confirmPassword"]').value;
        const errorMessage = document.getElementById('error-message');

        if (password !== confirmPassword) {
          errorMessage.textContent = 'Passwords do not match.';
          return false;
        }

        if (checkPasswordStrength(password) < 5) {
          errorMessage.textContent = 'Password is not strong enough. It should be at least 8 characters long, contain an uppercase letter, a lowercase letter, a number, and a special character.';
          return false;
        }

        return true;
      }

      window.addEventListener('DOMContentLoaded', (event) => {
        document.querySelector('input[name="password"]').addEventListener('input', function() {
          updateStrengthBar(checkPasswordStrength(this.value));
        });
      });
    </script>
</head>
<body>
<div class="container">
    <h1>Sign Up</h1>
    <form method="post" onsubmit="return validateForm();">
        <input type="text" name="username" placeholder="User Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
        <div class="strength">
            <div id="strength-bar" class="strength-bar"></div>
        </div>
        <button class="button" type="submit" name="signup">Sign Up</button>
    </form>
    <div class="error" id="error-message"></div>
</div>
</body>
</html>

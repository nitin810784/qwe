<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login / Sign Up</title>
  <link rel="stylesheet" href="../CSS/login-signup.css">
</head>
<body>

  

  <section class="login-signup-hero">
    <div class="hero-text">
      <h1>Welcome to Namaste-Tech</h1>
      <p>Log in to continue or sign up to start your learning journey.</p>
    </div>
  </section>

  <div class="main-content">

    <section class="login-form" id="loginSection">
      <h2>Login</h2>
      <form method="POST" action="#">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-submit">Login</button>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a>
        </div>
        <div class="switch-auth">
          <p>Don't have an account? <a href="#" onclick="showSignup()">Sign Up</a></p>
        </div>
      </form>
    </section>

    <section class="signup-form" id="signupSection" style="display: none;">
      <h2>Sign Up</h2>
      <form method="POST" action="#">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="role">Sign Up as:</label>
          <select id="role" name="role" required>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
          </select>
        </div>
        <button type="submit" class="btn-submit">Sign Up</button>
        <div class="switch-auth">
          <p>Already have an account? <a href="#" onclick="showLogin()">Log In</a></p>
        </div>
      </form>
    </section>

  </div>

  
  <script>
    function showLogin() {
      document.getElementById('loginSection').style.display = 'block';
      document.getElementById('signupSection').style.display = 'none';
      document.getElementById('loginTab').classList.add('active');
      document.getElementById('signupTab').classList.remove('active');
    }

    function showSignup() {
      document.getElementById('loginSection').style.display = 'none';
      document.getElementById('signupSection').style.display = 'block';
      document.getElementById('signupTab').classList.add('active');
      document.getElementById('loginTab').classList.remove('active');
    }
  </script>

</body>
</html>

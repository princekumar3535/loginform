<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Auth Form</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f2f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .maincon {
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      padding: 30px;
      position: relative;
    }

    .maincon h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .auth-form {
      display: none;
      flex-direction: column;
      gap: 15px;
    }

    .auth-form input {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .auth-form button {
      padding: 12px;
      background: #4f46e5;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.2s ease-in-out;
    }

    .auth-form button:hover {
      background: #4338ca;
    }

    .toggle-link {
      text-align: center;
      font-size: 14px;
      margin-top: 10px;
    }

    .toggle-link label {
      color: #4f46e5;
      cursor: pointer;
      text-decoration: underline;
    }

    input[type="checkbox"] {
      display: none;
    }

    #toggle:checked ~ .signup-form {
      display: flex;
    }

    #toggle:checked ~ .signin-form {
      display: none;
    }

    #toggle:not(:checked) ~ .signin-form {
      display: flex;
    }

    #toggle:not(:checked) ~ .signup-form {
      display: none;
    }
  </style>
</head>
<body>

  <div class="maincon">
    <input type="checkbox" id="toggle" />
    
    <div class="signin-form auth-form">
      <h2>Sign In</h2>
      <input type="email" placeholder="Email" required />
      <input type="password" placeholder="Password" required />
      <button type="submit">Sign In</button>
      <div class="toggle-link">
        Don't have an account? <label for="toggle">Sign Up</label>
      </div>
    </div>

    <div class="signup-form auth-form">
      <h2>Sign Up</h2>
      <input type="text" placeholder="Full Name" required />
      <input type="email" placeholder="Email" required />
      <input type="password" placeholder="Password" required />
      <button type="submit">Sign Up</button>
      <div class="toggle-link">
        Already have an account? <label for="toggle">Sign In</label>
      </div>
    </div>
  </div>

</body>
</html>

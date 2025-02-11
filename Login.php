<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 150vh;
      background-image: url("blogpmmodi1.jpg");
      background-size: contain;
      background-repeat: no-repeat;
      background-attachment: scroll;
      font-family: Arial, sans-serif;
      background-size: cover;
    }

    .main {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signin {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      border: 2px solid rgb(9, 9, 9);
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      text-align: center;
      height: 440px;
      width: 400px;
      margin: 0 auto;
    }


    .form-container h2 {
      margin-bottom: 80px;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
    }
    

    .form-container input[type="email"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      outline: none;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
      background-color: #0044cc;
    }

    .form-container p {
      margin-top: 20px;
    }

    .form-container a {
      color: blue;
      text-decoration: none;
    }

    .form-container a:hover {
      text-decoration: underline;
    }

    .social-network {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .social-network li {
      margin: 0 10px;
    }

    .social-network li a {
      display: block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #333;
      color: #fff;
      font-size: 20px;
      line-height: 40px;
      text-align: center;
      transition: background-color 0.3s;
    }

    .social-network li a:hover {
      background-color: #0044cc;
    }
  </style>
</head>
<body>
  <div class="signin">
    <div class="content">
      <div class="form-container">
        <h2>LOGIN</h2>
        <form method="post" action="L.php">
        <input type="email" placeholder="Email" class="email" name="Email" required/>
        <input type="password" placeholder="Password" class="password" name="pwd" required/>
          <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="Registration.php">Register</a></p>
      </div>
    </div>
  </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BP CODING</title>
  <link rel="stylesheet" href="css/tmp.css">
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

    .child {
      height: 440px;
      width: 400px;
      margin: auto;
      border: 2px solid rgb(9, 9, 9);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      backdrop-filter: blur(5px);
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    h1, p, a {
      color: #333;
    }

    .name, .email, .password, .phone, .address {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      outline: none;
      
    }

    .btn {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .text {
      color: #333;
    }

    .text a {
      text-decoration: none;
      color: blue;
    }

    .text a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <form action="R.php" method="post">
    <div class="main">
      <div class="child">
        <h1>REGISTRATION</h1>

        <input type="text" placeholder="Full_Name" class="name" name="Fullname" required/>
        <input type="email" placeholder="Email" class="email" name="Email" required/>
        <input type="password" placeholder="Password" class="password" name="pwd" required/>
        <input type="tel" placeholder="Phone" class="phone" name="Phone" required/>
        <input type="text" placeholder="Address" class="address" name="Address" required/>
        <input type="submit" class="btn" value="registration"/>
        <p class="text">Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </form>
</body>

</html>
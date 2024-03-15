
<?php
session_start();
if ( isset( $_SESSION['user'])){
  $_SESSION['msg'] = "Already logged in.";
  header('location: home.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #efefef;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      width: 350px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    form label {
      color: #58BC82;
      font-weight: 600;
    }

    form input[type="email"],
    form input[type="password"] {
      border-radius: 0.5rem;
      padding: 1rem 0.75rem;
      width: 100%;
      border: none;
      background-color: #f0f0f0;
      outline: 2px solid #707070;
      transition: outline 0.3s;
      text-transform: none;
    }

    form input[type="email"]:focus,
    form input[type="password"]:focus {
      outline: 2px solid #58BC82;
    }

    form .submit {
      padding: 1rem 0.75rem;
      width: 100%;
      border-radius: 3rem;
      background-color: #707070;
      color: #efefef;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      font-weight: 600;
      font-size: 0.9rem;
    }

    form .submit:hover {
      background-color: #58BC82;
      color: #707070;
    }

   

    button{
      padding: 1rem 0.75rem;
      width: 100%;
      border-radius: 3rem;
      background-color: #707070;
      color: #efefef;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      font-weight: 600;
      font-size: 0.9rem;
}
button:hover{
  background-color: #58BC82;
      color: #707070;
}

   
  </style>
</head>
<body>
  <div class="form-container" >
    <form action="login_processing.php" method="post">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">

      <label for="password">Password</label>
      <input type="password" name="password" id="password">

      
      <button>Log In</button>
      <closeform></closeform>

      
    </form>
  </div>
  <?php require('header.php') ?>
</body>
</html>



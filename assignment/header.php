<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gorkha Martial Arts</title>
    <style>
        /* Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Poppins:wght@300;400;500&display=swap');

        * {
            margin: 0px;;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            transition: 0.2s linear;
            text-transform: capitalize;
            font-family: "Poppins", sans-serif;

        }

        body {
            background: #004526;

        }

        .btn {
            margin-top: 2rem;
            width: 150px;
            padding: 12px;
            color: palegreen;
            background: tomato;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background: rgba(212, 48, 48, 0.76);
            transition: 0.4s;
        }

       
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 900;
            padding: 1rem 1%;
            display: flex;
            align-items: center;
            color: ghostwhite; /* Changed to black */
            justify-content: space-between;
        }

        .header .logo {
            font-size: 22px;
            font-weight: bolder;
            color: #fff;
            padding-right: 4px;
            margin-right: 5rem;
            display: flex;
        }

        .header .logo i {
            color: #fff;
            padding: 0.5rem;
        }

        .header .navbar a {
            font-size: 1.1rem;
            margin: 0 1rem;
            color: #fff;
        }

        .header .navbar a:hover {
            color: palegreen;
        }

        .header .btn {
            background: transparent;
            color: tomato;
            border: 1px solid palegreen;
            font-size: 12px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="gorkha.php" class="logo">
            <i class="fas fa-dumbbell"></i>Gorkha Martial Arts
        </a>
        <nav class="navbar">
            <a href="/assignment/gorkha.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="time.php">Time Table</a>
            <a href="price.php">Pricing</a>
            <a href="services.php">services</a>
            <a href="#">|</a>
            <?php if (isset($_SESSION['user'])) { ?>
            <a href="/assignment/logout.php">Log Out</a>
            <a href="/assignment/delete.php">Delete Profile</a>
            <a href="/assignment/edit_profile.php" class="btn">Edit Profile</a>
            <?php } else{
                ?>
                  <a href="/assignment/login.php">Log In</a>
                <?php }  ?>
        </nav>
    </header>
</body>
</html>

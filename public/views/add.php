<?php
echo 'smth';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/add.css">

</head>

<body>
    <header class="header">


        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Generated Portfolios</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <!-- <a href="#portfolio">portfolio</a> -->
            <!-- <a href="#contact">contact</a> -->
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>


    <div class="form-container">
        <h1>personal info<h1>
            <form class="personal-info" action="form_handler.php" method="post">
                <!-- <label for="first-name">First name</label> -->
                <input type="text" name="first-name" placeholder="First name">
                <!-- <label for="last-name">Last name</label> -->
                <input type="text" name="last-name" placeholder="Last name">
                <!-- <label for="user-name">User name</label> -->
                <input type="text" name="user-name" placeholder="User name">
                <!-- <label for="img">personal image url</label> -->
                <input type="text" name="img" placeholder="Image url">
                <!-- <label for="job-title">Job Title</label> -->
                <input type="text" name="job-title" placeholder="Job title">
                <!-- <label for="objective">Objective</label> -->
                <input type="text"  name="objective" placeholder="Objective">
                <!-- <label for="biography">Biography</label> -->
                <input type="text" class="biography" name="biography" placeholder="Biography">
                <input class="submit" type="submit" value="Submit">
            </form>
             <!--   <hr>
                <h1>Contact info</h1>
             <form action="form_handler.php" method="post">
                <label>email</label>
                <input type="text" name="email">
                <label>address</label>
                <input type="text" name="address">
                <label>phone</label>
                <input type="text" name="phone">
                <label>age</label>
                <input type="text" name="age">
                <label>Experience time</label>
                <input type="text" name="exp-time">
                <input type="submit" value="Submit">
            </form>
            <hr>
            <h1>skills</h1>
            <form action="form_handler.php" method="post">
                <label>skills</label>
                <input type="text" name="skill">
                <input type="submit" value="Submit">
            </form>
            <hr>
            <h1>experience</h1>
            <form action="form_handler.php" method="post">
                <label>job title</label>
                <input type="text" name="skill">
                <label>Date</label>
                <input type="text" name="date">
                <label>Location</label>
                <input type="text" name="location">
                <label>description</label>
                <input type="text" name="description">
                <input type="submit" value="Submit">
            </form>
            <hr>
            <h1>services</h1>
            <form action="form_handler.php" method="post">
                <label>service</label>
                <input type="text" name="service">
                <label>description</label>
                <input type="text" name="description">
                <input type="submit" value="Submit">
            </form> -->
            
    </div>
    <script src="../scripts/script.js"></script>

</body>

</html>
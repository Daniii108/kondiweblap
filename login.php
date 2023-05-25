<?php
$db_pass="n3RYM!_36b1eIQm9";
$db_name="gymfun";
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ) {
    $dbh = new PDO("mysql:host=localhost;dbname=$db_name", $db_name, $db_pass);

    $sql = "INSERT INTO user (name, email, password) 
        VALUES 
        ('{$_POST['name']}', '{$_POST['email']}', SHA1('{$_POST['password']}'))
    ";

    $dbh->query($sql); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/23/login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>SignUp</title>
</head>
<body>
<header class="header">

<a href="#" class="logo"> <span>FUN</span>GYM</a>

<div id="menu-btn" class="fas fa-bars"></div>

<nav class="navbar">
    <a href="#about">about</a>
    <a href="#features">features</a>
    <a href="#pricing">pricing</a>
    <a href="#trainers">classes</a>
    <a href="#blogs">SignUp</a>
</nav>

</header>

<section>
<div class="swiper-slide slide">
                <div class="image">
                    <img src="img/login.jpeg" alt="">
                </div>   

<div class="container">
    <p></p>
<h2></h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input name="password" type="password" class="form-control">
            </div>

            <button class="btn">
                Save
            </button>
        </form>
        </section>
</div>    
</body>
</html>
<!-- <?php
/* $password="7v3Y7bSq57Eof/S2";

$menu = array(
    array('text' => 'Home', 'link' => '/exam/index.php'),
    array('text' => 'Users', 'link' => '/exam/users.php'), */
// ); ?> -->

 <?php 
    // connect database
    $dbh = new PDO('mysql:host=localhost;dbname=db_users', 'root', '',
                  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
 
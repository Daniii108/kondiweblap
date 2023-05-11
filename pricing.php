<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Pricing</title>
    <style>
        #price{
            width: 1200px;
                margin-bottom: 100px;
                margin-top: 50px;
        }
        h2{
            margin-bottom: 50px;
                margin-top: 50px;
        }
        .container{
          background-color:#F0F8FF;
          border-radius: 8px;
        }
        .card-body{
          height: 400px;
          text-align:center;
        }
        #yoga{
          border-radius: 50%;
      padding: 5px;
  width: 150px; 
 }
  #box{
          border-radius: 50%;
      padding: 5px;
  width: 185px;        }
    </style>
</head>
<body>
<?php include_once('navigation.php') ?>
<div class="container" id="price">
    <h2>Pricing</h2>
<table class="table">
  <thead>
  </thead>
  <tbody>
    <tr>
      <td><div class="card" style="width: 18rem;">
  <div class="card-body">
  <img src="/exam/yoga2.jpeg" alt="Card image cap" id="yoga">
  <h2 class="card-title">Yoga</h2>
  <h3>Length: 1 hour</h3>
  <h3> 3000 Ft</h3>
  </div>
</div></td>
      <td><div class="card" style="width: 18rem;">
  <div class="card-body">
  <img src="/exam/spinning.jpg" alt="Card image cap" id="yoga">
    <h2 class="card-title">Spinning</h2>
    <h3>Length: 45 minutes</h3>
    <h3> 4000 Ft</h3>
  </div>
</div></td>
      <td><div class="card" style="width: 18rem;">
  <div class="card-body">
  <img src="/exam/box.jpg" alt="Card image cap" id="box">
    <h2 class="card-title">Boxing</h2>
    <h3>Length: 1,5 hour</h3>
    <h3> 3500 Ft</h3>
  </div>
</div></td>
    </tr>
    
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
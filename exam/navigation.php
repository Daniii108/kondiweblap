<?php
    require_once('config.inc.php');

?>
<style>
  #gym{
    border-radius: 8px;
    width: 6%;
    height: 15%;
    margin-right: 15px;
  }
  
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src="/exam/gym_icon.jpg" alt="Logo" width="30" height="24" id="gym" class="d-inline-block align-text-top">
      <a class="navbar-brand" href="/exam/index.php">GYM</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/exam/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/exam/courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/exam/pricing.php">Pricing</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
      <a class="navbar-brand" href="/exam/users.php">
      <img src="/exam/user.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
      </form>
    </div>
  </div>
</nav>

<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/loginsystem">isecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/loginsystem/welcome.php">Logout</a>
      </div>
      <div class="badge bg-primary">
       <?php echo htmlspecialchars($_SESSION['username']); ?></div>
    </div>
  </div>
</nav>
<h1><?php echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!"; ?></h1>


<div class="container mt-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="images/python.jpg" class="card-img-top" alt="python">
        <div class="card-body">
          <h5 class="card-title">Python</h5>
          <p class="card-text">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
          <a href="#" class="btn btn-primary">Access</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="images/java.jpg" class="card-img-top" alt="java">
        <div class="card-body">
          <h5 class="card-title">Java</h5>
          <p class="card-text">Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
          <a href="#" class="btn btn-primary">Access</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="images/dbms.jpg" class="card-img-top" alt="dbms">
        <div class="card-body">
          <h5 class="card-title">DBMS</h5>
          <p class="card-text">a database is an organized collection of data or a type of data store based on the use of a database management system (DBMS).</p></br>
          <a href="#" class="btn btn-primary">Access</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
   if(!isset($_SESSION))
    {
        session_start();
    }

  if (!isset($_SESSION['email'])) {
    // $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Proctor management portal">
    <meta name="author" content="Vivek, Sriram, sarvesh and gowri ">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Proctor Management System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="stylus.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">DASHBOARD</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="profile.php">Edit Profile</a>
       <?php
          if($_SESSION['type'] == 'student'){
            echo "<a href='academic_record.php' class='nav-link'>
                  Academic Record
                </a>";
          }elseif($_SESSION['type'] == 'proctor'){
            echo "<a href='proctees.php' class='nav-link'>
                  Proctees
                </a>";
          }?>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a href="index.php?logout" class="btn btn-secondary">Logout</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <img class="mb-4" src="Capture.png" alt="" width="120" height="120" />
    <h1 class="cover-heading">Proctor Management System</h1>
    <br />
    <p class="lead">Welcome,   <?php echo $_SESSION['email']; ?></p>
    <p class="lead">
      <a href="alert.html" class="btn btn-lg btn-secondary">Messaging</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>A Portal for <a href=https://bmsce.ac.in/>BMSCE</a>, by SVGS.</p>
    </div>
  </footer>
</div>
</body>
</html>

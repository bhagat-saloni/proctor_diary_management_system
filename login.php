<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="proctor student interaction portal">
    <meta name="author" content="Vivek Sai gowri sarvesh">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Login</title>

    <script type="text/javascript">
        function login_valid(){
           var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
           var email = document.getElementById('email').value;
           var pass = document.getElementById('pass').value;

                  if (!email)
                  {
                      putError("Email is required");
                      return false;
                  }
                         if (!reg.test(email))
                  {
                      putError("Invalid email address");
                      return false;
                  }
                  if (!pass)
                  {
                      putError("Password is required");
                      return false;
                  }



                  return true;
        }

        function putError(str){
            document.getElementById('errors').innerHTML = "<div class='notification is-danger'>" + str + "</div>";
        }
    </script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      body { background-image:url("b.jpg");
             background-position: center center;
             background-repeat: no-repeat;
             background-size: cover;
             background-attachment:fixed;

}

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

  <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color:#52c234">
  <div id="errors"></div>
  <form action="login.php" class="form-signin" method="post" onsubmit="return(login_valid())" style="border-radius: 25px; background: white; padding: 20px; width: 500px; height: 500px;">
  <h1 style="color:black" class="h3 mb-3 font-weight-normal ">Proctor Management System</h1>
  <img class="mb-4" src="Capture.png" alt="" width="120" height="120" />
  <h1  class="h3 mb-3 font-weight-normal">Sign In</h1>

  <input type="text" name="email" id="email" class="form-control top" placeholder="Email address" required autofocus>
  <input class="form-control bottom" type="password" placeholder="Password" id="pass" name="pass" required>
  <input class="btn btn-lg btn-primary btn-block" style="background-color:orange" type="submit" name="login_user"/>
  <p style="color:black">Not a member?<a href="register.php" class="mt-5 mb-3 text-muted" style=>Register now</a></p>

</form>

<?php
if(!isset($_SESSION))
{
  session_start();
}
// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['login_user'])) {
$email = mysqli_real_escape_string($db, $_POST['email']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);

// if (empty($email)) {
//   array_push($errors, "Email is required");
// }
// if (empty($password)) {
//   array_push($errors, "Password is required");
// }


$pass = md5($pass);
$query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$results = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($results);
if (mysqli_num_rows($results) == 1) {
$_SESSION['email'] = $email;
$_SESSION['type'] = $user['type'];
// $_SESSION['success'] = "You are now logged in";
header('location: index.php');
}else {
 echo "<script>putError('Wrong username/password combination');</script>";
// array_push($errors, "Wrong username/password combination");
}
}

?>

</body>
</html>

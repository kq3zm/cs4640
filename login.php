<!doctype html>
<html>
<head>

  <meta name = "author" content = "Katherine Qian & Julia Zhou">
  <meta name = "description" content = "omnomnom">
  <meta name = "keyword" content = "yummy food recipes yumyumyum">

  <meta charset="UTF-8">

  <title>Login</title>

  <link rel="stylesheet" href="styles/main.css">
  <form method="post" action="login.php">

    <script>
    function setFocus (){
      document.getElementById('uname').focus();

    }
    </script>
  </form>
</head>
<body onload="setFocus()" id="login_page">
  <div class="login">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <h1>Login to Your Account</h1>
      <label><b>Username</b></label>
      <input type="uname" id="uname" name="uname" onFocus="field_focus(this, 'username');"
      value="<?php echo @$_POST['uname']; ?>" onblur="field_blur(this, 'username');" class="uname" />

      <label><b>Password</b></label>
      <input type="password" id="pwd" name="pwd" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="uname" />

      <input type="submit" id="login_btn" name="login_btn" value="Login" />

    </form>


  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
  <script>
  function field_focus(field, uname)
  {
    if(field.value == uname)
    {
      field.value = '';
    }
  }

  function field_blur(field, uname)
  {
    if(field.value == '')
    {
      field.value = uname;
    }
  }

  //Fade in dashboard box
  $(document).ready(function(){
    $('.box').hide().fadeIn(1000);
  });

  //Stop click event
  $('a').click(function(event){
    event.preventDefault();
  });
  </script>

  <?php
  $next_page = "index.html";
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (empty($_POST['uname']) || $_POST['uname'] =='username')
        echo "<font color='red'><i>Please enter your username</i></font> <br />";

      else if (empty($_POST['pwd']) || $_POST['pwd'] =='password')
        echo "<font color='red'><i>Please enter your password</i></font> <br />";
      else {
        header('location:index.html');
    }

  }
  ?>
</body>
</html>

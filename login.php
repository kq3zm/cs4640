<!doctype html>
<html>
<head>

  <meta name = "author" content = "Katherine Qian & Julia Zhou">
  <meta name = "description" content = "omnomnom">
  <meta name = "keyword" content = "yummy food recipes yumyumyum">

  <meta charset="UTF-8">

  <title>Login</title>

  <link rel="stylesheet" href="styles/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
  <form method="post" action="login.php">

  <script>
    function setFocus (){
      document.getElementById('uname').focus();

    }
    </script>
  </form>

</head>
<body onload="setFocus()" id="login_page" ng-app="loginApp">
  <div class="login" ng-controller="loginController">
    <form>
      <h1>Login to Your Account</h1>
      <label><b>Username</b></label>
      <input type="uname" id="uname" name="uname" onFocus="field_focus(this, 'username');"
      value="<?php echo @$_POST['uname']; ?>" onblur="field_blur(this, 'username');" class="uname" ng-model="checkUname"/>

      <label><b>Password</b></label>
      <input type="password" id="pwd" name="pwd" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="uname" ng-model="checkPass" />

      <input type="submit" id="login_btn" name="login_btn" value="Login" ng-click="checkUser()" />

    </form>
      <br><br><br>
      <h1 sytle= "float:left">{{message}}</h1>
     
     <form class="login" action="http://localhost:8080/servlets/index.jsp" method="post" style = "visibility: hidden"  id="loginForm">
            <input type="text" name="unames" id="unames">
            <button type="submit"></button>
    </form>

  </div>
  <script>
    var loginApp = angular.module('loginApp', []);

    loginApp.controller("loginController", function($scope, $http)
    {
      $scope.message="";
      var onSuccess = function (data, status, headers, config)
      {
        $scope.message = "Username/password doesn't exist";
      };
      var onError = function (data, status, headers, config)
      {
        document.getElementById("unames").value=$scope.checkUname;
        document.getElementById("loginForm").submit();
      };

      $scope.checkUser = function(){
        var checkUname = $scope.checkUname;
        var checkPass = $scope.checkPass;

        if (checkUname == "") {
          $scope.message = "No username entered";
        } 
        else {
          console.log("check");
          var promise = $http.post("checkUser.php", {"checkUname": checkUname, "checkPass": checkPass});
          console.log(promise);
          promise.success(onSuccess);
          promise.error(onError);
        }
      }
    });
  </script>

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

</body>
</html>

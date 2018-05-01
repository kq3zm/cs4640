<!doctype html>
<html>
<head>

  <meta name = "author" content = "Katherine Qian & Julia Zhou">
  <meta name = "description" content = "omnomnom">
  <meta name = "keyword" content = "yummy food recipes yumyumyum">

  <meta charset="UTF-8">

  <title>Create a New Recipe</title>

  <link rel="stylesheet" href="styles/main.css">

  </script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"> </script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
  <!-- navbar.html code -->
  <!--Navigation bar-->
  <div id="nav-placeholder"></div>
  <header> <nav class="nav">
  <div class="search">
    <form class="searchBar" action="http://localhost:8080/servlets/search.jsp" method="post" style="float:left">
      <input type="text" placeholder="Search for a recipe" name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
  <a href="http://localhost:8080/servlets/index.jsp">Home </a> <a href="http://localhost/cs4640/create_recipe.php"> Create a
    Recipe </a> <a href="http://localhost:8080/servlets/login.jsp"> Logout </a> </nav> </header> <!--end of Navigation bar-->


  <h2 style ="margin-left:50px">CREATE A NEW RECIPE</h2>
  <div style = "height: 100%;width: 50%; float:left;overflow-x: auto;"class = "split left">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
      <b>NAME OF RECIPE</b> <br/> 
      <input type="text" name="name" ng-model="name"></textarea>
      <br/>    
      <b>DESCRIPTION</b> <br/> 
      <textarea rows="3" cols="50" name="desc" ng-model="desc"></textarea>
      <br/>  
      <b> STEPS<br><b>
      <div id = "steps" >
      <b>STEP 1</b> 
      <textarea rows="1" cols="43" name="step" ng-model="step"></textarea>
      <input type="button" value = "Add step" onclick="addSteps()" method="post" id ="add" name="addstep" ng-click= "Step()"></input>
      <br/> 
      </div>
      <b> INGREDIENTS (TAGS) <br><br/> 
      <textarea rows="3" cols="50" name="ingred"></textarea>
      <br/>
      <input type="submit" name="submit"  onclick="<?php $_SERVER['PHP_SELF'] ?>" method="post"><br> 
      
   </form>
   </div>

<div style = "height: 100%;width: 50%; float:right;overflow-x: auto;" class = "split"><h1>Name of recipe: {{name}}</h1>
<h1>Description: {{desc}}</h1>
<h1>Steps: </h1>
<p>{{steps}}</p>
<h1>Ingredients (TAGS): {{ingred}}</h1>
</div>

<script> 
var app = angular.module('myApp', [])
app.controller('myCtrl', function($scope) {
	var list = "";
	$scope.steps = document.getElementsByName("step").value;
    $scope.Step = function() {
    	elements = document.getElementsByName("step");
    	list = "";
    	i = 1;
    	elements.forEach(function(element) {
        	if (element.value != ""){
        	list = list + "Step " + i + " :" + element.value + '\n | ';
        	i ++;
        	}
    	    console.log(element.value);
    	});
    	$scope.steps = list;
    };
    
}); 
</script>
   <?php
	// form handler and form -- same file -- sometimes refer to as "sticky form" 

	$ans1 = $feedback = NULL;
	function validForm() {
		$filled = true;
    	if(isset($_POST["submit"])){
    		// Andrew King (ak4jd) and Brian King (bmk5cc) helped in figuring out that you need to check if
    		// the button is pressed to prevent the error message from showing up before entering
    		// anything
			if (isset($_POST["name"])){
    			$r_name = $_POST['name'];
    			if (empty($r_name)) {
      				echo "<font color='red'><i>Recipe name must be filled out</i></font> <br />";
    			}
    			$filled = false;
    		}
    		if (isset($_POST["ingred"])){
    			$r_ingred = $_POST['ingred'];
    			if (empty($r_ingred)){
    				echo "<font color='red'><i>Add ingredients needed for this recipe</i></font> <br />";
    			}
    			$filled = false;
    		}
    		if($filled){
    			header("Location: http://localhost/cs4640/index.html");
    		}
    	}
    }
    	
  	
  	validForm();


	?>
	<script type='text/javascript'>
		function addSteps(){
			var container = document.getElementById("steps");
			var field = document.createElement('TEXTAREA');
			var br = document.createElement("br");
			field.setAttribute('cols',43);
			field.setAttribute('rows',1);
			field.setAttribute('id','styled');
			field.setAttribute('name', 'step');
      field.setAttribute('ng-model', 'step');
			container.appendChild(field);	
			container.appendChild(br);
		}
	</script>

</body>
</html>

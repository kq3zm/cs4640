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
</head>
<body>
  <!-- navbar.html code -->
  <div id="nav-placeholder">
  </div>
	<script>
		$(function(){
  		$("#nav-placeholder").load("navbar.html");
		});
	</script>
  <h2 style ="margin-left:50px">CREATE A NEW RECIPE</h2>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <b>NAME OF RECIPE</b> <br/> 
      <textarea rows="1" cols="50" name="name"></textarea>
      <br/>    
      <b>DESCRIPTION</b> <br/> 
      <textarea rows="3" cols="50" name="desc"></textarea>
      <br/>  
      <b> STEPS<br><b>
      <div id = "steps">
      <b>STEP 1</b> 
      <textarea rows="1" cols="43" name="step" ></textarea>
      <input type="button" value = "Add step" onclick="addSteps()" method="post" id ="add" name="addstep"></input>
      <br/>    
      </div>
      <b> INGREDIENTS (TAGS) <br><br/> 
      <textarea rows="3" cols="50" name="ingred"></textarea>
      <br/>
      <input type="submit" name="submit"  onclick="<?php $_SERVER['PHP_SELF'] ?>" method="post"><br> 
      
   </form>
   <?php
	// form handler and form -- same file -- sometimes refer to as "sticky form" 

	$ans1 = $feedback = NULL;
	function validForm() {
		$filled = true;
    	if(isset($_POST["submit"])){
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
    function addStep() {
    	if(isset($_POST["addstep"])){
    		echo "hi";
    		
    	} else {
    		
    	}
    }
    addStep();
    	
  	
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
			container.appendChild(field);	
			container.appendChild(br);
		}
	</script>

</body>
</html>

<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta name="author" content="Katherine Qian & Julia Zhou">
<meta name="description" content="omnomnom">
<meta name="keyword" content="yummy food recipes yumyumyum">

<meta charset="UTF-8">

<title>Home</title>

<link rel="stylesheet" href="styles/main.css">
</head>
<body>

	<header> <!--Navigation bar-->
	<div id="nav-placeholder"></div>
	<header> <nav class="nav"> 
		<div class="search">
		<form class="searchBar" action="search.jsp" method="post">
	            <input type="text" placeholder="Search for a recipe" name="search">
	            <button type="submit">Submit</button>
	     </form>
	      </div>
		<a href="index.html">Home </a> 
		<a href="create_recipe.php"> Create a Recipe </a> 
		<a href="login.php"> Logout </a> 
		</nav> 
	</header> <!--end of Navigation bar--> 
	</header>
	
<%-- 	<jsp:getProperty name="user" property="username"/>
 --%>	
	<h2 style="margin-left: 50px;">Recipes For You</h2>
	<div
		style="display: inline-block; align: center; vertical-align: middle">
		<img src="images/food_logo.jpg" alt="placeholder" class="images">
	</div>
	<div style="display: inline-block; vertical-align: middle;">
		<h4 class="caption">This is filler text. This is filler text.</h4>
	</div>
	<br>
	<br>
	<div
		style="display: inline-block; align: center; vertical-align: middle">
		<img src="images/food_logo.jpg" alt="placeholder" class="images">
	</div>
	<div style="display: inline-block; vertical-align: middle;">
		<h4 class="caption">This is filler text. This is filler text.</h4>
	</div>
	<br>
	<br>
	<div
		style="display: inline-block; align: center; vertical-align: middle">
		<img src="images/food_logo.jpg" alt="placeholder" class="images">
	</div>
	<div style="display: inline-block; vertical-align: middle;">
		<h4 class="caption">This is filler text. This is filler text.</h4>
	</div>

	<%@ include file="footer.jsp"%>

</body>
</html>
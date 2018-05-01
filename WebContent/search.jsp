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
		<form class="searchBar">
	            <input type="text" placeholder="Search for a recipe" name="search">
	            <button type="submit">Submit</button>
	     </form>
	      </div>
		<a href="index.jsp">Home </a> 
		<a href="http://localhost/cs4640/create_recipe.php"> Create a Recipe </a> 
		<a href="http://localhost/cs4640/login.php"> Logout </a> 
		</nav> 
	</header> <!--end of Navigation bar--> 
	
	</header>
	
	<% String search = request.getParameter("search"); %> 
	<h2> The search for <%= search %> did not yield any results.</h2>
		

	<jsp:include page="footer.jsp"/>

</body>
</html>

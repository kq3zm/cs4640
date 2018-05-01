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
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js">
	
</script>

<link rel="stylesheet" href="styles/main.css">
</head>
<body ng-app="" ng-init="recipes=['Recipe 1', 'Recipe 2', 'Recipe 3']">

	<%
		HttpSession s = request.getSession(false);
		if (request.getParameter("uname") == null) {
		} else {
			String name = request.getParameter("uname");
			s.setAttribute("theName", name);
		}
	%>

	<header> <!--Navigation bar-->
	<div id="nav-placeholder"></div>
	<header> <nav class="nav">
	<div class="search">
		<form class="searchBar" action="search.jsp" method="post">
			<input type="text" placeholder="Search for a recipe" name="search">
			<button type="submit">Submit</button>
		</form>
	</div>
	<a href="index.jsp">Home </a> <a href="create_recipe.php"> Create a
		Recipe </a> <a href="login.jsp"> Logout </a> </nav> </header> <!--end of Navigation bar-->
	</header>

	<h2>
		hello
		<%=s.getAttribute("theName")%></h2>



	<h2 style="margin-left: 50px;">Recipes For You</h2>
	<div ng-repeat="recipe in recipes">
		<div
			style="display: inline-block; align: center; vertical-align: middle">
			<img src="images/food_logo.jpg" alt="placeholder" class="images">
		</div>
		<div style="display: inline-block; vertical-align: middle;">
			<h4 class="caption">{{recipe}}: This is filler text.</h4>
		</div>
		<br> <br>
	</div>

	<%@ include file="footer.jsp"%>

</body>
</html>

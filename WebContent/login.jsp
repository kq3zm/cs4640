<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="beans.userBean" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <meta name = "author" content = "Katherine Qian & Julia Zhou">
  <meta name = "description" content = "omnomnom">
  <meta name = "keyword" content = "yummy food recipes yumyumyum">

  <meta charset="UTF-8">

  <title>Login</title>

  <link rel="stylesheet" href="styles/main.css">
  <form method="post" action="login.html">
  

   </form>
  </head>
  <body onload="setFocus()" id="login_page">
    <div class="login">
     <form action ="index.jsp" method= post>
      <h1>Login to Your Account</h1>
      <label><b>Username</b></label>
      <input type="uname" id="uname" name="uname" onFocus="field_focus(this, 'username');" onblur="field_blur(this, 'username');" class="uname" />

      <label><b>Password</b></label>
      <input type="password" id="pwd" value="password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="uname" />

          <input type="submit" id="login_btn" value="Login" />
        </form>


    </div>
   <jsp:useBean id="user" class="beans.userBean" scope="session">  </jsp:useBean>
  <jsp:setProperty name="user" property="username" value='<%= request.getParameter("uname") %>' />
      
 
  </body>
  </html>

<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
 <title>CS 4640: Sending mail exercise</title>
</head>
<body>

<%@ include file="header.jsp" %>
<%@ include file="footer.jsp" %>

<%-- <jsp:include page="date.jsp"></jsp:include>

<jsp:include page="include-param.jsp">
	<jsp:param name="firstname" value="upsorn"/>
	<jsp:param name="computingID" value="up3f"/>
	 --%>


<center><h1>CS 4640: Mail Service</h1></center>
<form action="http://labunix03.cs.virginia.edu:8080/cs4640/mailService" method="post">
<center>
  <table>
    <tr>
      <td>
        Your email address 
      </td>
      <td>
        <input type="text" name="your_email" size=30>
      </td>
    </tr>
    <tr>
      <td>
        Subject 
      </td>
      <td>
        <input type="text" name="email_subject" size=30>
      </td>
    </tr>
    <tr>
      <td>
        Message 
      </td>
      <td>
        <textarea name="email_msg" row=4 cols=50></textarea>
      </td>
    </tr>
    <tr>
      <td align="center" colspan=2>
        <input type="submit" value="Send Email">
      </td>
    </tr>
  </table>
</center>
</form>
</body>
</html>

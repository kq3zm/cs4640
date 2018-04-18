<%! 
  // use JSP declaration to keep track visitors 
  
  int visitCount = 0;
  void addCount() 
  {
     visitCount++;
  }
%>
<% addCount(); %>

<html>
<head>
  <title>In-class activity: JSP actions</title>
</head>
<body>
  <center>
    <h2>In-class activity: JSP actions</h2>
    <p>This page has been visited <%= visitCount %> times.</p>
    <p>Put some menu / navigation system and probably search facility</p>
  </center>
  <br/>
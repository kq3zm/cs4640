import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Date;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	static String url = "http://localhost:8080/servlets/LoginServlet";

    public LoginServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	      HttpSession session = request.getSession(); 
	      session.setAttribute("username", request.getParameter("uname"));

	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
		
		response.setContentType ("text/html");
        PrintWriter out = response.getWriter ();
        

        out.print ("<html>\n");
        out.print ("   <body>\n");

        String user = (String) request.getSession().getAttribute("username"); 
        out.print ("      Hello <font color=green>");
        out.print (user);
        out.print ("      </font>\n");
        out.print ("   </body>\n");
        out.print ("</html>\n");

        out.close ();
	}

}

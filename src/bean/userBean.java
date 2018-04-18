package bean;

//all beans must be in package

public class userBean 
{
   private String username;
 
   public userBean()
   {    	   
   }
 
   // property "name"
   // naming convention: "get" followed by parameter's name that starts with an upper case
   public String getUsername() 
   {
      return username;
   }

   // property "name"
   // naming convention: "set" followed by parameter's name that starts with an upper case   
   public void setUsername(String nm)
   {
      this.username = nm; 
   }

}
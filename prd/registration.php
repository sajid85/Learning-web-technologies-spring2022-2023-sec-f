<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <center>
        <table  height="600" width="700">
            <tr>
                <td>
                    <form method="POST" action="http://localhost/prd/reg_check.php" >
                        <fieldset>
                            <legend><h2>REGISTRATION</h2></legend>
                            <table>
                                <tr>
                                 <td>Name</td>
                                    <td>:<input type="text" name="name" value=""/> <br></td>
                                </tr>
                                        
                                <tr>
                                    <td>Email</td>
                                    <td>:<input type="email" name="email" value=""/> <br>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:<input type="text" name="username" value=""/> <br></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:<input type="password" name="password" value=""/> <br></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td>:<input type="password" name="confirmpassword" value=""/> <br> </td> 
                                </tr>
                                </table>
                                <fieldset>
                                    <Legend>Gender</Legend>
            
                                        <input type="radio" name="gender" value="Male"/> Male
                                        <input type="radio" name="gender" value="Female"/> Female
                                        <input type="radio" name="gender" value="Other"/> Other <br>
                                 </fieldset>
                                 <fieldset>
                                  <Legend>Date of Birth</Legend>
                                    <input type="date" name="dob" value=""/> 
                                 </fieldset><br>
                                 <Legend>Role</Legend>
                                        <input type="radio" name="role" value="Admin"/> Admin <br>
                                        
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset">
            </fieldset>
        </form>
    </center>
    </body>
</html>
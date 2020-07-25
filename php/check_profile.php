<?php



function PROFILE(){

        $con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con)); // Connect to database server(localhost) with username and password.
        mysqli_select_db($con,"organization") or die(mysqli_error($con)); // Select registration database.

        
        $username = mysqli_escape_string($con,$_GET['username']);// get the username from the login details to retrieve profile info
        
        $result = mysqli_query($con,"SELECT company_name,email_users,company_address,country,telephone, province FROM users WHERE company_name = '$username' OR email_users = '$username' ") or die(mysqli_error($con)); 
        if ($result->num_rows === 1) {
        

            $row = $result->fetch_assoc();
        
            echo("
            <div class='card'>

                <h1>$row[company_name]</h1> <br>
                

                <p  class='title'>Email Address : $row[email_users]</p><br>
               

                <p class='title'>Telephone : $row[telephone]</p><br>
                

                <p class='title'>Address : $row[company_address]</p><br>
    

                <p class='title'>Province : $row[province]</p><br>
               

                <p class='title'>Country : $row[country]</p><br>
               
            
               
                <p class='subject'>Company details</p><br>
                

                <p><button style = 'width: 100%'>EDIT</button></p>
               
                <form method='post'> 
                <input  style = 'background-color: #003B5C;
                border: none;
                border-radius: 1px;
                width: 60px;
                height: 25px;
                cursor: pointer; width: 100%;' type='submit' name ='hide' value='HIDE'></input> 
                </form>

            </div>
            ");

        }  
    }
    if(array_key_exists('PROFILE', $_POST)) { 
        PROFILE(); 
        
    } 
    if(array_key_exists('hide', $_POST)) { 
        hide(); 
        
    } 
    function hide(){
        echo "
        <script type=\"text/javascript\">
        document.getElementById('popup').style.display ='none';
        </script>
    ";
        
               
    }
    

   
?>
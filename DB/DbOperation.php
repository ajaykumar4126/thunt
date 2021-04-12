<?php
class DbOperation
{
    private $con;
    private $to;
    function __construct()
    {
        require_once 'DbConnect.php';

        $db = new DbConnect();
        $this->con = $db->connect();
    }

    // --------------------- home --------------



    function mymethod()
    {
        echo "this is my method";
    }

    
    function loginData($username, $userpass)
    {

        $query = mysqli_query($this->con, "SELECT * FROM users WHERE username = '$username' AND userpass = '$userpass' AND username='admin'");
        
        if(mysqli_num_rows($query) > 0)
        {
            $row = mysqli_fetch_assoc($query);

            session_start();

            header("Location: admin/home.php");

            return "login Successful";
        }
        else
        {
            return "Acoount Details incorrect";
        }
    }

}

?>



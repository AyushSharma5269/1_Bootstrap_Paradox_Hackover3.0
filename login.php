<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection
$con = new mysqli("localhost", "root","","db");
if($con->connect_eror)
{
    die("Failed to connect: ".$con->connect_erro);
}
else{
    $stmt = $con->prepare("select *from table_name where email = ?" );
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stm->result = $stmt->get_result();
    if($stm->result->num_row >0){
        $data = $stmt_result-> fetch_assoc();
        if($data['password']===$password){
            echo "<h2>Log in Successfully</h2>";
        }
        else
        {
            echo "<h2> Invalid Email or Password</h2>";
        }
    }
    else
    {
            echo "<h2> Invalid Email or Password</h2>";
    }

}


?>
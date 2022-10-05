<?php 
  $name=$_POST['name'];
  $age=$_POST['age'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pass=$_POST['password1'];
  $conn= new mysqli('localhost','root','','hacka_register');
  if($conn->connect_error){
      die('connection failed :'.$conn->connect_error);
  }
  else{
    
      $stmt=$conn->prepare("insert into hacka_reg(name,age,phone,email,password)
      values(?,?,?,?,?)");
      $stmt->bind_param("sssss",$name,$age,$phone,$email,$pass);
      $stmt->execute();
      echo "<html><body><h1>register successful</h1>
              <a href'login.html'>Login Now</a></body></html>";
      $stmt->close();
      $conn->close();
  }
?>
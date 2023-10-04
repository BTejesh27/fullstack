<?php
if(isset($_POST['submit'])){
  $_name=$_POST['name'];
  $_email=$_POST['email'];
  $_branch=$_POST['mobile'];
  $co=new mysqli("localhost","root","teju123","registrations");
  echo $_mobile;
  $cc=("SELECT * FROM teachers where mobile =  '$_mobile'");

  $check=mysqli_query($co,$cc);
 // $row = mysqli_fetch_assoc($check);
  if(mysqli_num_rows($check) > 0){
     echo "error!!";

     echo "teachers with  $_mobile is already exists....";

  }
   else{
      $query="INSERT INTO `teachers`(`name`, `email`, `mobile`) VALUES ('$_name','$_email','$_mobile')";
      mysqli_query($co,$query);
      mysqli_close($co);
      echo 'login successfull......';
   }


}
?>


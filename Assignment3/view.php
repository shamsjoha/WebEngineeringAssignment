<?php
$host='localhost';
$user='root';
$pass='';
$dbname='student';
$dbconnection=mysqli_connect($host,$user,$pass,$dbname);
?>


<?php
    $id= $_POST['id'];
    $name= $_POST['name'];
    $fname=$_POST['fname'];
    $mail= $_POST['mail'];
    $blood=$_POST['blood'];
    if(empty($id)) {
      $err_msg="Please Provide Your Diu Id";
      header('location:join.php?id_err='.$err_msg);
    }
    elseif($id[3]!='-'||$id[6]!='-'||strlen($id)<9)
    {
    $err_msg="Please Provide Your Valid Diu ID";
      header('location:join.php?id_err='.$err_msg);
    }
    elseif(empty($name)){
        $err_msg="Please Provide Your Name";
        header('location:join.php?name_err='.$err_msg);
    }
    elseif(empty($name)){
        $err_msg="Please Provide Your First Name";
        header('location:join.php?nam_err='.$err_msg);
    }
    elseif(empty($mail)) {
      $err_msg="Please Provide Your Email";
      header('location:join.php?mail_err='.$err_msg);
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $err_msg="Please Give A Valid Email Address";
      header('location:join.php?mail_err='.$err_msg);
    }
    elseif(empty($blood)){
        $err_msg="Please Provide Your Blood Group";
        header('location:join.php?bld_err='.$err_msg);
    }
    else {
     $insert="INSERT INTO `infos`(`name`, `fname`, `std-id`, `email`, `timeslot`) VALUES ('$name','$fname','$id','$mail','$blood')";
     $insert_result=mysqli_query($dbconnection,$insert);
     header('location:donor.php');
    }

?>

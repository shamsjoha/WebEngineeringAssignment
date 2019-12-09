<?php
$host='localhost';
$user='root';
$pass='';
$dbname='student';
$dbconnection=mysqli_connect($host,$user,$pass,$dbname);
$select = "SELECT * FROM infos";
$select_result=mysqli_query($dbconnection,$select);
?>



<!DOCTYPE html>
<html>

<head>
    <title>Donor Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <div id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="index.php">Student Information Form</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="donor.php">All Student</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="donors">
            <div class="container">
                <h4>Students Information</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Student Fname</th>
                                <th>Student Email</th>
                                <th>Student Time Slot</th>
                            </tr>
                            <?php 
                               foreach($select_result as $user_info){
                            ?>
                            <tr>
                                <td><?php echo $user_info['std-id']?></td>
                                <td><?php echo $user_info['name']?></td>
                                <td><?php echo $user_info['fname']?></td>
                                <td><?php echo $user_info['email']?></td>
                                <td><?php echo $user_info['timeslot']?></td>
                            </tr>
                            <?php } ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>

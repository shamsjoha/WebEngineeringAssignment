<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information</title>
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
    
    <section id="dis">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center m-auto py-5">
                    <form action="view.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="id" placeholder="Enter Your ID">
                            <div class="err text-danger">
                                <?php
                                if (!empty($_GET['id_err'])) {
                                  echo $_GET['id_err'];
                                }
                               ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                            <div class="err text-danger">
                                <?php
                                if (!empty($_GET['name_err'])) {
                                  echo $_GET['name_err'];
                                }
                               ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                            <div class="err text-danger">
                                <?php
                                if (!empty($_GET['nam_err'])) {
                                  echo $_GET['nam_err'];
                                }
                               ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="mail" placeholder="Enter Your email">
                            <div class="err text-danger">
                                <?php
                                if (!empty($_GET['mail_err'])) {
                                  echo $_GET['mail_err'];
                                }
                               ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <select class="form-control" name="blood">
                                <option value="">choose Your Time Slot</option>
                                <option value="Monday 15.00-17.00">Monday 15.00-17.00</option>
                                <option value="Tuesday 12.00-14.00">Tuesday 12.00-14.00</option>
                                <option value="Sunday 02.00-09.00">Sunday 02.00-09.00</option>
                                <option value="Tuesday 12.00-13.00">Tuesday 12.00-13.00</option>
                                <option value="Wednesday 12.00-01.00">Wednesday 12.00-01.00</option>
                                
                            </select>
                            <div class="err text-danger">
                                <?php
                                if (!empty($_GET['bld_err'])) {
                                  echo $_GET['bld_err'];
                                }
                               ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
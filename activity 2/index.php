<?php
include_once("config/database.php");
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
</head>
<body>
<div class="container">

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-tags"></i>
                Student View
            </h3>
            <h2><a href="class/index.php">Class Students</a></h2>
            <form method="post">
                <button name="insert" class="btn-info">insert new product here</button>
            </form>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th> Student ID</th>
                        <th> First Name</th>
                        <th> Last Name</th>
                        <th> Gender</th>
                        <th> Birthdate</th>
                        <th> Address</th>
                        <th> Contact</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                        if(isset($_POST["insert"])) {
                            echo "<script>window.open('insert.php','_self')</script>";
                        } 
                    ?>
                    <?php


                    $i = 0;
                    $get_students = "select * from tbl_student";
                    $run_students = mysqli_query($con, $get_students);

                    while ($row_students = mysqli_fetch_array($run_students)) {

                    $student_id             =   $row_students['student_id'];
                    $student_fname          =   $row_students['fname'];
                    $student_lname          =   $row_students['lname'];
                    $student_gender         =   $row_students['gender'];
                    $student_birthdate      =   $row_students['birthdate'];
                    $student_address        =   $row_students['address'];
                    $student_contact        =   $row_students['contact'];
                    $i++;

                    ?>
                        <tr>
                            <td> <?php  echo $student_id ; ?>        </td>
                            <td> <?php  echo $student_fname; ?>      </td>
                            <td> <?php  echo $student_lname; ?>      </td>
                            <td> <?php  echo $student_gender; ?>     </td>
                            <td> <?php  echo $student_birthdate; ?>  </td>
                            <td> <?php  echo $student_address; ?>    </td>
                            <td> <?php  echo $student_contact; ?>    </td>
                            <td> 
                            <i class="fa fa-trash red"></i>
                            <a href="delete.php?delete_student=<?php echo $student_id; ?>">
                             Delete
                            </a> 
                            </td>
                            <td> 
                            <i class="fa fa-pencil blue"></i>
                            <a href="edit.php?edit_student=<?php echo $student_id; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>


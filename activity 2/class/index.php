<?php
include_once("../config/database.php");
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
                Student Class
            </h3>
            <form method="post">
                <button name="insert" class="btn-info">insert new product here</button>
            </form>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th> Class Code</th>
                        <th> Student ID</th>
                        <th> Subject Code</th>
                        <th> Time</th>
                        <th> Teacher</th>
                        <th></th>
                        <th></th>
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
                    $get_students = "select * from tbl_class";
                    $run_students = mysqli_query($con, $get_students);

                    while ($row_students = mysqli_fetch_array($run_students)) {
                    $id                =   $row_students['id'];
                    $class_code        =   $row_students['classcode'];
                    $studentid         =   $row_students['studentid'];
                    $subject_code      =   $row_students['subjectcode'];
                    $time              =   $row_students['time'];
                    $teacher           =   $row_students['teacher'];
                    $i++;

                    ?>
                        <tr>
                            <td> <?php  echo $class_code; ?>      </td>
                            <td> <?php  echo $studentid; ?>      </td>
                            <td> <?php  echo $subject_code; ?>     </td>
                            <td> <?php  echo $time; ?>  </td>
                            <td> <?php  echo $teacher; ?>  </td>
                            <td> 
                            <i class="fa fa-trash red"></i>
                            <a href="delete.php?id=<?php echo $id; ?>">
                             Delete
                            </a> 
                            </td>
                            <td> 
                            <i class="fa fa-pencil blue"></i>
                            <a href="edit.php?edit_student=<?php echo $id; ?>">Edit</a>
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


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
    <form method="post" action="insert.php" class="form-horizontal" enctype="multipart/form-data">

        <div class="form-group">
            <label class="col-md-3 control-label"> Class Code </label>
            <div class="col-md-6">
                <input name="classcode" type="text" class="form-control" required>
            </div>
        </div>

<div class="form-group">
    <div class="form-group">
        <label class="col-md-3 control-label"> Student ID </label>
        <div class="col-md-6">
            <input name="studentid" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Subject Code </label>
        <div class="col-md-6">
            <input name="subjectcode" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Teacher </label>
        <div class="col-md-6">
            <input name="teacher" type="text" class="form-control" required>
        </div>
    </div>
  
  
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-6">
            <input name="submit" value="Insert Product" type="submit"
                   class="btn btn-primary form-control">
        </div>
    </div>
    </form>

</div>
</div>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
</body>
</html>


<?php

if (isset($_POST['submit'])) {

    $classcode = $_POST['classcode'];
    $studentid = $_POST['studentid'];
    $subjectcode = $_POST['subjectcode'];
    $teacher = $_POST['teacher'];

    $update_student = "insert into tbl_class(classcode,studentid,subjectcode,time,teacher) values ('$classcode','$studentid','$subjectcode',NOW(),'$teacher')";
 
    $run_student = mysqli_query($con, $update_student);


    if ($run_student) {

        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }

}

?>


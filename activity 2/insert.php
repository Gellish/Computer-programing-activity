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
    <form method="post" class="form-horizontal" enctype="multipart/form-data">

        <div class="form-group">
            <label class="col-md-3 control-label"> FirstName </label>
            <div class="col-md-6">
                <input name="fname" type="text" class="form-control" required>
            </div>
        </div>

<div class="form-group">
    <div class="form-group">
        <label class="col-md-3 control-label"> LastName </label>
        <div class="col-md-6">
            <input name="lname" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Gender </label>
        <div class="col-md-6">
            <input name="gender" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Birthdate </label>
        <div class="col-md-6">
            <input name="birthdate" type="date" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Address </label>
        <div class="col-md-6">
            <input name="address" type="text" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> Contact </label>
        <div class="col-md-6">
            <input name="contact" type="number" class="form-control" required>
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

    $student_fname = $_POST['fname'];
    $student_lname = $_POST['lname'];
    $student_gender = $_POST['gender'];
    $student_birthdate = $_POST['birthdate'];
    $student_address = $_POST['address'];
    $student_contact = $_POST['contact'];

    $update_student = "insert into tbl_student(fname,lname,gender,birthdate,address,contact) values ('$student_fname','$student_lname','$student_gender','$student_birthdate','$student_address','$student_contact')";
 
    $run_student = mysqli_query($con, $update_student);


    if ($run_student) {

        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";

    }

}

?>


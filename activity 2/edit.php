<?php
include_once("config/database.php");


if (isset($_GET['edit_student'])) {

    $edit_student_id = $_GET['edit_student'];
    $get_student = "select * from tbl_student where student_id='$edit_student_id'";
    $run_edit = mysqli_query($con, $get_student);
    $row_edit = mysqli_fetch_array($run_edit);
    $student_id = $row_edit['student_id'];
    $student_fname = $row_edit['fname'];
    $student_lname = $row_edit['lname'];
    $student_gender = $row_edit['gender'];
    $student_birthdate = $row_edit['birthdate'];
    $student_address = $row_edit['address'];
    $student_contact = $row_edit['contact'];
    

}

 ?>

 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <title> Insert students </title>
    </head>
    <body>
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- form-horizontal Begin -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> FirstName</label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="fname" type="text" class="form-control" required
                                       value="<?php echo $student_fname; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> LastName </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="lname" type="text" class="form-control" required
                                       value="<?php echo $student_lname; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Gender </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                            <input name="gender" type="txt" class="form-control" required
                                       value="<?php echo $student_gender; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Birthdate </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="birthdate" type="date" class="form-control" required
                                       value="<?php echo $student_birthdate; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div>
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Address </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="address" type="text" class="form-control" required
                                       value="<?php echo $student_address; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div>
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Contact </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="contact" type="text" class="form-control" required
                                       value="<?php echo $student_contact; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div>
                     
                      
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="update" value="Update student" type="submit"
                                       class="btn btn-primary form-control">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                    </form><!-- form-horizontal Finish -->
                </div><!-- panel-body Finish -->
            </div><!-- canel panel-default Finish -->
        </div><!-- col-lg-12 Finish -->
    </div><!-- row Finish -->

<script src="assets/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
    </body>
    </html>


    <?php

    if (isset($_POST['update'])) {

        $student_fname = $_POST['fname'];
        $student_lname = $_POST['lname'];
        $student_gender = $_POST['gender'];
        $student_birthdate = $_POST['birthdate'];
        $student_address = $_POST['address'];
        $student_contact = $_POST['contact'];

        $update_student = "update tbl_student set fname='$student_fname',lname='$student_lname',gender='$student_gender',birthdate='$student_birthdate',contact='$student_contact' where student_id='$student_id'";

        $run_student = mysqli_query($con, $update_student);

        if ($run_student) {

            echo "<script>alert('Your student has been updated Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";

        }

    }

    ?>



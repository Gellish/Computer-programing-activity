<?php
include_once("../config/database.php");


if (isset($_GET['edit_student'])) {

    $edit_student_id = $_GET['edit_student'];
    $get_student = "select * from tbl_class where id='$edit_student_id'";
    $run_edit = mysqli_query($con, $get_student);
    $row_edit = mysqli_fetch_array($run_edit);
    $id = $row_edit['id'];
    $classcode = $row_edit['classcode'];
    $studentid = $row_edit['studentid'];
    $subjectcode = $row_edit['subjectcode'];
    $time = $row_edit['time'];
    $teacher = $row_edit['teacher'];
    

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
                            <label class="col-md-3 control-label"> Class Code</label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="classcode" type="text" class="form-control" required
                                       value="<?php echo $classcode; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> student id </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="studentid" type="text" class="form-control" required
                                       value="<?php echo $studentid; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> subject code </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                            <input name="subjectcode" type="txt" class="form-control" required
                                       value="<?php echo $subjectcode; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> time </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="time" type="time" class="form-control" required
                                       value="<?php echo $time; ?>">
                            </div><!-- col-md-6 Finish -->
                        </div>
                        <div class="form-group"><!-- form-group Begin -->
                            <label class="col-md-3 control-label"> teacher </label>
                            <div class="col-md-6"><!-- col-md-6 Begin -->
                                <input name="teacher" type="text" class="form-control" required
                                       value="<?php echo $teacher; ?>">
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

        $classcode = $_POST['classcode'];
        $studentid =  $_POST['studentid'];
        $subjectcode =  $_POST['subjectcode'];
        $time =  $_POST['time'];
        $teacher =  $_POST['teacher'];

        $update_student = "update tbl_class set classcode='$classcode',studentid='$studentid',subjectcode='$subjectcode',time='$time',teacher='$teacher' where id='$id'";

        $run_student = mysqli_query($con, $update_student);

        if ($run_student) {

            echo "<script>alert('Your student has been updated Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";

        }

    }

    ?>



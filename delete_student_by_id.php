<!DOCTYPE html>
<html>
<head>
    <title>students_crud_bootstrap</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="navbar navbar-default" role="navigation">
            <h1>View Student List </h1>

        </div>

    </div>


    <div class="row">
        <div class="navbar navbar-default col-md-4" style="height: 400px">
            <a href="index.html" class="list-group-item"> Menu </a>
            <a href="view_studentlist.php" class="list-group-item active">View Student List</a>
            <a href="add_student.html" class="list-group-item">Add Students</a>
            <a href="view_courselist.html" class="list-group-item">View Courses</a>
            <a href="add_courses.html" class="list-group-item">Add Courses</a>
            <a href="add_single_course.php" class="list-group-item">Assign Single Course to Studen</a>
            <a href="#" class="list-group-item">Add Students with Courses</a>
        </div>



        <div class="navbar navbar-default col-md-7 col-md-offset-1" style="height: 400px">

            <?php
                $connect = mysql_connect('localhost','root','');
                $db = mysql_select_db('student_system',$connect);
                $id = $_POST['delete_name'];
                $result = mysql_query("DELETE FROM add_student where id = '$id'");

                    if($result)
                        {
                        echo "Student Deleted";
                        }
                    else
                        {
                        echo "Not Deleted";
                        }
            ?>

</div>





</div>

</div>


<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
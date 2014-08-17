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
            <h1>View Course List </h1>

        </div>

    </div>


    <div class="row">
        <div class="navbar navbar-default col-md-4" style="height: 400px">
            <a href="index.html" class="list-group-item"> Menu </a>
            <a href="view_studentlist.php" class="list-group-item">View Student List</a>
            <a href="add_student.html" class="list-group-item">Add Students</a>
            <a href="view_courselist.html" class="list-group-item">View Courses</a>
            <a href="add_courses.html" class="list-group-item ">Add Courses</a>
            <a href="add_single_course.php" class="list-group-item active">Assign Single Course to Studentt</a>
            <a href="#" class="list-group-item">Assign Multiple Course to Student</a>
        </div>



        <div class="navbar navbar-default col-md-7 col-md-offset-1" style="height: 400px">

            {<?php
            $first_name = $_REQUEST['student_first_name'];
            $last_name = $_REQUEST['student_last_name'];

            $connect = mysql_connect('localhost','root','');

            $db = mysql_select_db('student_system',$connect);

            mysql_query("insert into add_student (first_name,last_name) values ('$first_name','$last_name')");

            $result = mysql_query("select id from add_student where first_name = '$first_name' and last_name = $last_name");

            $student_id = mysql_fetch_array($result);

            $input_student_id = $student_id['id'];

            foreach($_REQUEST['course_title'] as $course_title)
            {
            $result = mysql_query("select id from courses where course_name = '$course_title' ");
            $course_id = mysql_fetch_array($result);
            $input_course_id = $course_id['id'];

            $query = "select course_name from add_course where id = '$input_course_id'";
            $result = mysql_query($query);
            $course_name = mysql_fetch_array($result);
            $input_course_name = $course_name[$course_name];


            $query = "insert into mapping_table (first_name,last_name,student_id,course_name,course_id) values ('$first_name','$last_name','$input_student_id','$input_course_name','$input_course_id')";

            $result = mysql_query($query);
            }

            if($result)
            {
            echo "Data inserted<br/>";
            }
            else
            {
            echo "Data not inserted<br/>";
            }

            ?>}


            <div class="row">

                <div class="navbar navbar-default" style="height: 50px">

                </div>
            </div>

        </div>


        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
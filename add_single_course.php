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

            <form action="add_single_course_database.php" method="POST">
                <div class="form-group">

                    <div class="form-group">
                        <label for="input_first_name">Student's First Name</label>
                        <input type="student_first_name" name="student_first_name" class="form-control" id="input_first_name" placeholder="Insert Your First Name"></br>
                        <label for="input_last_name">Student's Last Name</label>
                        <input type="student_last_name" name="student_last_name" class="form-control" id="input_last_name" placeholder="Insert Your Last Name">
                    </div>

                    <label for="course_name">Select Course</label>

                    <select class="form-control" name="course_title[]" multiple="multiple">
                        <?php
                        $connect = mysql_connect('localhost','root','');
                        $db = mysql_select_db('student_system',$connect);
                        $result = mysql_query("SELECT course_name from add_course");
                        while($row = mysql_fetch_array($result))
                        {
                            echo "<option>".$row['course_name']."</option>";
                        }
                        ?>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary">Assign</button>
            </form>


    <div class="row">

        <div class="navbar navbar-default" style="height: 50px">

        </div>
    </div>

</div>


<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
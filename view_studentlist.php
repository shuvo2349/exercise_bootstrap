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
            <a href="view_studentlist.html" class="list-group-item active">View Student List</a>
            <a href="add_student.html" class="list-group-item">Add Students</a>
            <a href="view_courselist.html" class="list-group-item">View Courses</a>
            <a href="add_courses.html" class="list-group-item">Add Courses</a>
            <a href="add_single_course.php" class="list-group-item">Assign Single Course to Student</a>
            <a href="#" class="list-group-item">Add Students with Courses</a>
        </div>


        <div class="navbar navbar-default col-md-7 col-md-offset-1" style="height: 400px">
            <div class="row">

                <table class="table table-bordered">
                    <caption>Student's List</caption>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                        $connect = mysql_connect('localhost','root','');
                        mysql_select_db('student_system',$connect);
                        $i = 0;
                        $query = "Select * from add_student";
                        $result = mysql_query($query);
                        while($data = mysql_fetch_object($result) ):
                    ?>

                    <tr>
                        <td><?php echo ++$i;?></td>
                        <td><?php echo $data->id;?></td>
                        <td><?php echo $data->first_name;?></td>
                        <td><?php echo $data->last_name;?></td>

                    </tr>
                    <?php
                        endwhile;
                        mysql_close($connect);
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6">

                        <label for="delete_name" class="col-sm-2 control-label">Insert ID for Delete</label>
                        <div class="col-sm-10">
                            <form role="form" action="delete_student_by_id.php" method="post">
                                <input type="text" name="delete_name" class="form-control" id="delete_name" placeholder="Insert ID for Delete a Student">
                                <button type="submit" class="btn btn-default">Delete</button>
                            </form>
                       </div>


                </div>
                <div class="col-md-6">


                </div>
            </div>

        </div>


        <!--<div class="navbar navbar-default" style="height: 50px"-->

        </div>
    </div>


</div>


<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
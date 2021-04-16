
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Ask question</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Ask question from best mentors!</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="ask_question.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Select category of doubt" name="cdoubt" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Title of Doubt" name="tdoubt" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Please elaborate your doubt in detail. More you elaborate easier it is for expert to understand" name="edoubt" type="text" autofocus>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Ask now" name="askquestion" >

                        </fieldset>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['askquestion']))
{
    $category_d=$_POST['cdoubt'];//here getting result from the post array after submitting the form.
    $title_d=$_POST['tdoubt'];//same
    $elab_d=$_POST['edoubt'];//same
    

//insert the user into the database.
    $insert_doubt="insert into question (cdoubt,tdoubt,edoubt) VALUE ('$category_d','$title_d','$elab_d')";
    if(mysqli_query($dbcon,$insert_doubt))
    {
        echo"<script>window.open('succ.html','_self')</script>";
    }

}





?>
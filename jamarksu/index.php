<?php
  include_once ("config.php");
  $sql = mysqli_query($conn, "SELECT * FROM tblcourse");
  while($row = mysqli_fetch_array($sql)){
    echo $row['course_id'] . " ".$row ['course_desc'];
     } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-danger">Insert Info</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Course ID</label>
                        <input type="text" name="code" id="" class="form-control" Required>
                    </div>
                    <div class="form-group">
                        <label for="">Course Description</label>                        <input type="text" name="course_desc" id="" class="form-control" Required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include 'crud/crud.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enroll_number']) && isset($_POST['date_of_admission'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['enroll_number'] && !empty($_POST['date_of_admission']))){
      create($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['enroll_number'],$_POST['date_of_admission']);
      header('location:student.php');
  }

}







?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet">
    <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
            <div class="form-control d-flex justify-content-end">
                <div class="row">
                    <div class="form-group mt-4">
                        <input placeholder="username" type="text" name="name" required>
                    </div>
                    <div class="form-group mt-4">
                        <input placeholder="Email" type="text" name="email" required>
                    </div>
                    <div class="form-group mt-4">

                        <input placeholder="Phone" type="text" name="phone" required>
                    </div>

                    <div class="form-group mt-4">

                        <input placeholder="Date_of_Admission" type="date" name="date_of_admission" required>
                    </div>
                    <div class="form-group mt-4">

<input placeholder="enroll_number" type="text" name="enroll_number" required>
</div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" type="Submit" name="insert">Add</button>

                    </div>
                </div>
            </div>
        </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'crud/crud.php';
$students=[];
$students=getdata();


if(isset($_GET['id']) && !empty($_GET['id'])){

  delete($_GET['id']);
  header('location:student.php');
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enroll_number']) && isset($_POST['date_of_admission'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['enroll_number'] && !empty($_POST['date_of_admission']))){
    update($_POST['id']);
    header('location:form.php');
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="Le site officiel de restauration d'e-learning classe  Si vous etes actuellement  un étiduant  YouCode creer votre compte et commencer par choisir plusieurs options " />
  <meta name="author" content="payment, students, home, courses, logout" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DashbordAdmin</title>
  <!-- Favicon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/Dashbord.css">
  <link rel="stylesheet" href="css/student.css">

</head>

<body>

<main>
  <?php include 'include/side.php' ?>
  <!-- Page content wrapper-->
  <!-- Top navigation-->
  <?php include 'include/nav.php' ?>



  <!-- Page content-->
  <div class="container-fluid">
 

    <div class="container ">
    <div class="col-12 d-flex justify-content-end ">
            <a href="form.php">
              <input value="add New Student" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light mt-5 " type="submit" />
            </a>
          </div>

      <div class="row p-3 table-responsive pt-4">

        <table class="table table-borderless spacing-table ">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col" class="text-capitalize">name</th>
              <th scope="col" class="text-capitalize">email</th>
              <th scope="col" class="text-capitalize">phone</th>
              <th scope="col" class="text-capitalize">enroll number</th>
              <th scope="col" class="text-capitalize">date of admission</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

          <tr>
    <?php foreach ($students as $students) : ?>
        <td><img src="pexels-photo-2379004 1.png" alt=""></td>
        <td><?php echo $students["name"] ?></td>
        <td><?php echo $students["email"] ?></td>
        <td><?php echo $students["phone"] ?></td>
        <td><?php echo $students["enroll_number"] ?></td>
        <td><?php echo $students["date_of_admission"] ?></td>
        <td><a href="form.php?id=<?php echo $students['id']?>"><i class="bi bi-pencil fs-5 text-info"></i></a> <a href="student.php?id=<?php echo $students['id']?>" class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a></td>
</tr>
<?php endforeach ?>



          </tbody>
        </table>

      </div>

    </div>


  </div>
  </main>



  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="side/side.js"></script>
</body>

</html>
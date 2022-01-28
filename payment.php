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
  <?php include '<include/side.php'?>



  <!-- Page content wrapper-->
  <!-- Top navigation-->
  <?php include 'include/nav.php'?>


  <!-- Page content-->
  <div class="container-fluid">

    <div class="container">
      <div class="row  p-3 pt-4 d-flex justify-content-between">
        <div class="col-5">
          <h1 class="fw-bold fs-2">Payment Details</h1>
        </div>
        <div class="col-1"><img src="Vector.png" alt=""></div>
      </div>

      <div class="row  table-responsive p-3 pt-4 ">
        <table class="table table-striped border-top">
          <thead>
            <tr>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">Handle</th>
              <th scope="col">Handle</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <?php include 'include/tabpay.php'?>
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="side/side.js"></script>
</body>

</html>
<?php include 'admin.php'?>

<?php
require_once('b2b_onlinepharma.php');

$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
$serialNumber = 1;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>crud dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!----css3---->
  <link rel="stylesheet" href="css/custom.css">


  <!--google fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!--google material icon-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>


  <div class="wrapper">


    <div class="body-overlay"></div>

   
      <!--------main-content------------->

      <div class="main-content">
        <div class="row">

          <div class="col-md-12">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Manage Medicine Inventory</h2>
                  </div>

                 
                      <div class="xp-searchbar" style="margin-left:-400px;">
                      <form method="GET">
    <div class="input-group">
      <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
      <div class="input-group-append">
        <button class="btn" type="submit" id="button-addon2">GO</button>
      </div>
    </div>
  </form>
                 </div>
                


                  
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center" >
                    <a href="Category.php" class="btn btn-success" >
                      <i class="material-icons">&#xE147;</i> <span>Add </span></a>

              
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover" >
                <thead >
                  <tr  >
                    <th >Sr.No.</th>
                    <th>Category name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
 $searchQuery = "";
 if (isset($_GET['search'])) {
   $searchQuery = mysqli_real_escape_string($conn, $_GET['search']);
 }
 
 $query = "SELECT * FROM category";
 if (!empty($searchQuery)) {
   $query .= " WHERE C_name LIKE '%$searchQuery%'";
 }
 
 $result = mysqli_query($conn, $query);
 
 if ($result) {
   while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <tr>
      <td><?php echo $serialNumber; ?></td>
        <td><?php echo $row['C_name']; ?></td>
        <td>
        <a href="edit_category.php?updateid=<?php echo $row['C_id']; ?>" class="edit">
            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="delete_medicine.php?C_id=<?php echo $row['C_id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this record?')">
    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
</a>
        </td>
      </tr>
  <?php
  $serialNumber++;
    }
  } else {
    echo "Query execution failed: " . mysqli_error($conn);
  }
  ?>
                </tbody>
              </table>
              <div class="clearfix">
                <ul class="pagination">
                  <li class="page-item disabled"><a href="#">Previous</a></li>
                  <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <!---footer---->


      </div>

      
    </div>
  </div>


  <!----------html code compleate----------->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>


  <script type="text/javascript">

    $(document).ready(function () {
      $(".xp-menubar").on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
      });

      $(".xp-menubar,.body-overlay").on('click', function () {
        $('#sidebar,.body-overlay').toggleClass('show-nav');
      });

    });

  </script>





</body>

</html>
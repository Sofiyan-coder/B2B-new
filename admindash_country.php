


<?php

require_once('b2b_onlinepharma.php');



$query = "SELECT * FROM country";
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

    <!-------------------------sidebar------------>
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><img src="img/logo1.png" class="img-fluid" /><span>B2B Online Pharma</span></h3>
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
            <span>Dashboard</span></a>
        </li>


        <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">location_on</i>Location</a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
            <li>
              <a href="admindash_country.php">Country</a>
            </li>
            <li>
              <a href="admindash_state.php">State</a>
            </li>
            <li>
              <a href="admindash_district.php">District</a>
            </li>
            <li>
              <a href="admindash_taluka.php">Taluka</a>
            </li>
            <li>
              <a href="admindash_city.php">City</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="material-icons">medical_services</i>Medicine</a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu2">
            <li>
              <a href="admindash_category.php">Category</a>
            </li>
            <li>
              <a href="admindash_subcategory.php">Subcategory</a>
            </li>
            <li>
              <a href="#">Sub-subcategory</a>
            </li>
            <li>
              <a href="admindash_medicine.php">Medicine</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="material-icons">security</i>
            <span>Admin Privileges</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu3">
          <li>
              <a href="#">Dealer Approval</a>
            </li>
            <li>
              <a href="#">Retailer Approval</a>
            </li>
                        
          </ul>
        </li>
        <li class="dropdown">
          <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="material-icons">description</i><span>Reports</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu4">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>
        <!-- <li class="dropdown">
          <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">border_color</i><span>forms</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu5">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>



        <li class="dropdown">
          <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">grid_on</i><span>tables</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu6">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">content_copy</i><span>Pages</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu7">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">library_books</i><span>Calender
            </span></a>
        </li> -->


      </ul>


    </nav>




    <!--------page-content---------------->

    <div id="content">

      <!--top--navbar----design--------->

      <div class="top-navbar">
        <div class="xp-topbar">

          <!-- Start XP Row -->
          <div class="row">
            <!-- Start XP Col -->
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
              <div class="xp-menubar">
                <span class="material-icons text-white">signal_cellular_alt
                </span>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
         
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
              <div class="xp-profilebar text-right">
                <nav class="navbar p-0">
                  <ul class="nav navbar-nav flex-row ml-auto">
                    
                  <li class="nav-item dropdown" style="margin-left:1200px;">
                      <a class="nav-link" href="#" data-toggle="dropdown">
                        <img src="img/user.png" style="width:40px; border-radius:50%;" />
                        <span class="xp-user-live"></span>
                      </a>
                      <ul class="dropdown-menu small-menu">
                        <li>
                          <a href="#">
                            <span class="material-icons">
                              person_outline
                            </span>Profile

                          </a>
                        </li>
                        <li>
                          <a href="#"><span class="material-icons">
                              settings
                            </span>Settings</a>
                        </li>
                        <li>
                          <a href="#"><span class="material-icons">
                              logout</span>Logout</a>
                        </li>
                      </ul>
                    </li>
                  </ul>


                </nav>

              </div>
            </div>
            <!-- End XP Col -->

          </div>
          <!-- End XP Row -->

        </div>
        <div class="xp-breadcrumbbar text-center">
          <h4 class="page-title">Admin Dashboard</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Booster</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>

      </div>



      <!--------main-content------------->

      <div class="main-content">
        <div class="row">

          <div class="col-md-12">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Manage Location</h2>
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
                    <a href="country.php" class="btn btn-success" >
                      <i class="material-icons">&#xE147;</i> <span>Add </span></a>
                      </div>
                </div>
              </div>
              <table class="table table-striped table-hover" >
                <thead>
                  <tr >
                    <th >Sr.No.</th>
                    <th>Country Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 

$searchQuery = "";
if (isset($_GET['search'])) {
  $searchQuery = mysqli_real_escape_string($conn, $_GET['search']);
}

$query = "SELECT * FROM country";
if (!empty($searchQuery)) {
  $query .= " WHERE Cn_name LIKE '%$searchQuery%'";
}

$result = mysqli_query($conn, $query);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
    <td><?php echo $serialNumber; ?></td>
      <td><?php echo $row['Cn_name']; ?></td>
      <td>
      <a href="edit_country.php?updateid=<?php echo $row['Cn_id']; ?>" class="edit">
            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="delete_location.php?Cn_id=<?php echo $row['Cn_id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this record?')">
    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
</a>
      </td>
    </tr>
<?php 
$serialNumber++;

  }
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
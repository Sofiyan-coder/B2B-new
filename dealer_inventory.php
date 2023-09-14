<?php

// require_once('b2b_onlinepharma.php');
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}



$query = "SELECT * FROM tbl_retailer where status = 'Approved' ";
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
  <title>Dealer dashboard</title>
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
          <a href="#" class="dashboard"><i class="material-icons">dashboard</i>
            <span>Dashboard</span></a>
        </li>


        <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons location">aspect_ratio</i>Location</a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
            <li>
              <a href="#">Country</a>
            </li>
            <li>
              <a href="#">State</a>
            </li>
            <li>
              <a href="#">District</a>
            </li>
            <li>
              <a href="#">Taluka</a>
            </li>
            <li>
              <a href="#">City</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">apps</i><span>Medicine</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu2">
            <li>
              <a href="#">Category</a>
            </li>
            <li>
              <a href="#">Subcategory</a>
            </li>
            <li>
              <a href="#">Sub-subcategory</a>
            </li>
            <li>
              <a href="#">Medicine</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">equalizer</i>


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
            <i class="material-icons">extension</i><span>Reports</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu4">
            <li>
              <a href="#">page 1</a>
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
          <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="material-icons location">extension</i><span>Invetories</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu5">
            <li>
              <a href="dealer_inventory.php">Dealer Inventory</a>
            </li>
            <li>
              <a href="retailer_inventory.php">Retailer Inventory</a>
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
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" data-toggle="dropdown">
                        <img src="img/logo1.png" style="width:40px; border-radius:50%;" />
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
          <h4 class="page-title">Dealer Dashboard</h4>
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
                    <h2 class="ml-lg-2">Search Retailer</h2>
                  </div>

                 
                      <div class="xp-searchbar" style="margin-left:-300px;">
                      <form method="GET">
    <div class="input-group">
      <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
      <div class="input-group-append">
        <button class="btn" type="submit" id="button-addon2">GO</button>
      </div>
    </div>
  </form>
                 </div>
                 
                  <!-- <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center" >
                    <a href="country.php" class="btn btn-success" >
                      <i class="material-icons">&#xE147;</i> <span>Add </span></a>
                      </div> -->
                </div>
              </div>
              <table class="table table-striped table-hover" >
                <thead>
                  <tr >
                    <th >Sr.No.</th>
                    <th>Retailer Name</th>
                    <th>Mobile no.</th>
                    <th >Email</th>
                    <th>PAN no.</th>
                    <th>Drug License no</th>
                    <th>GST no.</th>
                    <th>Shop Name</th>
                    <th>Shop Address</th>
                    <th >Country</th>
                    <th>State</th>
                    <th>District</th>
                    <th >Taluka</th>
                    <th>City</th>
                    <th>Pin code</th>
                  
                    <th>Order Count</th>
                  </tr>
                </thead>
                <tbody>
                <?php 

                      // $searchQuery = "";
                      // if (isset($_GET['search'])) {
                      //   $searchQuery = mysqli_real_escape_string($conn, $_GET['search']);
                      // }

                      $query = "SELECT * FROM tbl_retailer where status = 'Approved'";
                      // if (!empty($searchQuery)) {
                      //   $query .= " WHERE  name LIKE '%$searchQuery%'";
                      // }

                      $result = mysqli_query($conn, $query);

                      if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                          <td><?php echo $serialNumber; ?></td>
                          <td><a href="http://" target="_blank" rel="noopener noreferrer"><?php echo $row['name']; ?></a>></td>
                            <td><?php echo $row['mobile_no']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['pan_no']; ?></td>
                            <td><?php echo $row['drug_licence_no']; ?></td>
                            <td><?php echo $row['gst_no']; ?></td>
                            <td><?php echo $row['shop_name']; ?></td>
                            <td><?php echo $row['shop_address']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td><?php echo $row['district']; ?></td>
                            <td><?php echo $row['taluka']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['pin_code']; ?></td>
                           
                            <td><?php echo $row['order_count']; ?></td>
                          <td>
                          </tr>
                      <?php 
                      $serialNumber++;

                        }
                      } 

                        ?>
                </tbody>
              </table>
              <!-- <div class="clearfix">
                <ul class="pagination">
                  <li class="page-item disabled"><a href="#">Previous</a></li>
                  <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div> -->
        


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
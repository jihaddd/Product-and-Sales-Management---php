<!DOCTYPE html>
<html lang="AR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>إدارة المبيعات </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="assets/images/xxx.PNG" alt="logo" />
                    </a>
                </div>
                <ul class="nav">
                <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">الصفحة الرئيسية </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sales.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title"> المبيعات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title"> إضافة المنتجات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="veiwpro.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title"> عرض المتجات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mangmentmo.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title"> إدارة المستودعات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">التقارير</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="snadat.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">السندات</span>
                        </a>
                    </li>

            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> الصنف </th>
                                                    <th> سعر البيع </th>
                                                    <th>قيمة الربح  </th>
                                                    <th> قيمة الرسوم الادارية</th>
                                                    <th>قيمة الخصم  </th>
                                                    <th>قيمة الضريبة  </th>
                                                    <!-- <th>العمليات</th> -->
                                                   

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include 'config.php';
                                                $query = 'select idd, Product, bia, lucre, lucread, disc, Tax from prodect';
                                             //$query = "select body from Comment where id=" . $id . ";";
                                                $result = mysqli_query($conn, $query);
                                                  while ($row = mysqli_fetch_assoc($result)) {
                                                  
                                                  echo '<tr>';
    
                                                  echo '<td>' . $row['idd'] . '</td>';
                                                  echo '<td>' . $row['Product'] . '</td>';
                                                  echo '<td>' . $row['bia'] . '</td>';
                                                  echo '<td>' . $row['lucre'] . '</td>';
                                                  echo '<td>' . $row['lucread'] . '</td>';
                                                  echo '<td>' . $row['disc'] . '</td>';
                                                  echo '<td>' . $row['Tax'] . '</td>';
                                                //   echo '<td class="Py-1">
                                      
                                                //  <form action="" method="post" class="pencil"> 
                                                //   <input  type="hidden" value="' . $row['id'] . '" name="showId">
                                                //    <i class="fa fa-pencil-square-o fa-2x"aria-hidden="true" id="tr"></i>
                                                //  </form>
                                      
                                                //   <form action="" method="Post" class="trash">
                                                //   <button class="x" type="hidden" value="' . $row['id'] . '" name="Delete_id">
                                                //  <i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                                                //  </form>
                                            
                                                //  </td>';
                                               
                                                 echo '</tr>';
    
                                                    }
                                                    var_dump($query);
                                                    die;
                                            ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
            <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="assets/js/shared/off-canvas.js"></script>
            <script src="assets/js/shared/misc.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="assets/js/demo_1/dashboard.js"></script>
            <!-- End custom js for this page-->
</body>

</html>
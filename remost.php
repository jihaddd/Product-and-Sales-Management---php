<!DOCTYPE html>
<html lang="en">
<?php



include 'config.php';

?>
<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
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
                            <span class="menu-title"> المستودعات</span>
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
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="remost.php">
                                                                قائمة الأصناف المسترجعة </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="talfmostt.php">
                                                                قائمة الأصناف التالفة </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="addmot.php">
                                                                إضافة مستودع جديد </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="addremos.php">
                                                                إضافة   الاصناف المسترجعة </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="talfmost.php">
                                                                إضافة   الاصناف التالفة </span>
                                                    </div>

                                                </td>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                                <th> # </th>
                                                <th> الصنف </th>
                                                <th> الكمية </th>
                                                <th> المستودع </th>
                                                <th> القسم </th>
                                                <th>نسبة الخصم التي تمت </th>
                                                <th> قيمة الصنف </th>
                                                <th> رقم الجوال </th>






                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                               
                                            <?php
                                            include 'config.php';
                                            // $query = 'select id, name from warehouse';
                                           
                                            $query = 'SELECT * from remost';
                                            //$query = "select body from Comment where id=" . $id . ";";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['id'] . '</td>';
                                                echo '<td>' . $row['Product'] . '</td>';
                                                echo '<td>' . $row['Quantity'] . '</td>';
                                                echo '<td>' . $row['most'] . '</td>';
                                                echo '<td>' . $row['section'] . '</td>';
                                                echo '<td>' . $row['xxx'] . '</td>';
                                                echo '<td>' . $row['bia'] . '</td>';
                                                echo '<td>' . $row['phon'] . '</td>';
                                                //   echo '<td>' . $row['id'] . '</td>';
                                                echo '</tr>';
                                            }
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
       
<?php
 
?>


</body>

</html>
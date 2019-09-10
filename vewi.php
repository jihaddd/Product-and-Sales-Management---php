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
                        <div class="col-md-18 grid-margin stretch-card">

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
                                                            <a href="">
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
                                                                إضافة الاصناف المسترجعة </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                            <a href="addmot.php">
                                                                إضافة الاصناف التالفة </span>
                                                    </div>

                                                </td>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <!-- <form action="" method="post">
                                                    <input type="hidden"  name="delet" value="' . $row['id'] . '">
                                                    <input type="submit" class="btn btn-danger" value="حذف">
                                                    </form> -->
                                    <br>
                                    <!-- <form action="vewi.php" class="forms" method="POST" enctype="multipart/form-data">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                بحث باسم الصنف </span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="search" id="search_text">
                                        <button type="submit" class="btn btn-danger" name="submit">بحث</button>
                                    </div>
                                    
                                    </form> -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> الصنف </th>
                                                <th> الكمية </th>
                                                <th>القسم </th>
                                                <th> سعر الشراء </th>
                                                <th>سعر البيع </th>
                                                <th>ثابتين </th>
                                                <th>الصدقة </th>
                                                <th>نسبة الربح </th>
                                                <th>نسبة الرسوم الادارية </th>
                                                <th>نسبة الضريبة </th>
                                                <!-- <th> العمليات </th>
                                                 -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            

                                            include 'config.php';
                                            if (isset($_POST['search'])) {
                                                $search = $_POST['search'];
                                                $query= "select idd, Product, Currenttt, Section, price, bia, Stable, Charity, Profit, fees, Tax from prodect where most= '" . $search
                                                 . "' ";
                                                
                                            }
                                            else

                                            if (isset($_GET['most'])) {
                                                $id = $_GET['most'];

                                                $query = "select idd, Product, Currenttt, Section, price, bia, Stable, Charity, Profit, fees, Tax from prodect where most= '" . $id . "' ";

                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';

                                                    echo '<td>' . $row['idd'] . '</td>';
                                                    echo '<td>' . $row['Product'] . '</td>';
                                                    echo '<td>' . $row['Currenttt'] . '</td>';
                                                    echo '<td>' . $row['Section'] . '</td>';
                                                    echo '<td>' . $row['price'] . '</td>';
                                                    echo '<td>' . $row['bia'] . '</td>';
                                                    echo '<td>' . $row['Stable'] . '</td>';
                                                    echo '<td>' . $row['Charity'] . '</td>';
                                                    echo '<td>' . $row['Profit'] . '</td>';
                                                    echo '<td>' . $row['fees'] . '</td>';
                                                    echo '<td>' . $row['Tax'] . '</td>';
                                                    echo '<td>
                                                   
                                                   
                                                    ';
                                                   
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <!-- 'SELECT warehouse.name,
                                    COUNT(prodect.idd) As Total
                                    FROM warehouse
                                    INNER JOIN prodect ON warehouse.name=prodect.most and where id='" . $id . "'
                                    GROUP BY warehouse.id, warehouse.name, warehouse.locetion'; -->
                                    <?php
                                    $output = "";
                                    $query = "SELECT warehouse.name, COUNT(prodect.idd) As Total FROM warehouse 
                                    INNER JOIN prodect ON warehouse.name=prodect.most 
                                    and warehouse.name='" . $id . "' 
                                    GROUP BY warehouse.id, warehouse.name, warehouse.locetion ";

                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    $output .= '
                                    <div class="input-group input-group-sm mb-">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                عدد المنتجات الموجودة </span>
                                        </div>
                                        <input type="text" value="' . $row["Total"] . '" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="price" id="z" readonly>
                                    </div>';
                                    echo $output;

                                   
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>

        </div>

       


</body>

</html>
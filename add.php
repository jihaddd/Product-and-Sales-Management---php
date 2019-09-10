<!DOCTYPE html>
<html lang="en">
<?php



include 'config.php';

?>

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
    <script type="text/javascript">
        function sum() {

            var xx = parseInt(document.getElementById("x").value);
            var yy = parseFloat(document.getElementById("y").value);
            var zz = parseInt(document.getElementById("z").value);
            var aa = parseInt(document.getElementById("a").value);
            var result = xx + yy + zz + aa;

            document.getElementById("txtresult").value = result;
        }

        function summ() {

            var xx = parseFloat(document.getElementById("r").value);
            var yy = parseFloat(document.getElementById("txtresult").value);
            var result = xx * yy / 100 ;

            document.getElementById("txtresulttt").value = result;
        }

        function summm() {

            var xx = parseFloat(document.getElementById("m").value);
            var yy = parseFloat(document.getElementById("txtresult").value);
            var result = xx * yy / 100;

            document.getElementById("txtresultttt").value = result;
        }

        function b() {

            var xx = parseFloat(document.getElementById("n").value);
            var yy = parseFloat(document.getElementById("txtresult").value);
            var result = xx * yy / 100;

            document.getElementById("txtresulttttt").value = result;
        }

        function c() {

            var xx = parseFloat(document.getElementById("r").value);
            var yy = parseFloat(document.getElementById("n").value);
            var xy = parseFloat(document.getElementById("m").value);
            var result = xx + yy + xy / 100 ;

            document.getElementById("txtresultt").value = result;
        }

        function g() {

            var xx = parseFloat(document.getElementById("txtresult").value);
            var yy = parseFloat(document.getElementById("txtresultt").value);

            var result = xx * yy ;

            document.getElementById("txtresultttttt").value = result;
        }

        function h() {

            var xx = parseFloat(document.getElementById("txtresult").value);
            var yy = parseFloat(document.getElementById("txtresultttttt").value);

            var result = xx + yy;

            document.getElementById("txtresulttttttt").value = result;
        }
    </script>


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

                                    <form action="add.php" class="forms" method="POST" enctype="multipart/form-data">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    الصنف</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Product">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    الفئة</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Category">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> الباركود</span>
                                            </div>
                                            <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Barcode">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    المخزن </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="storee">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> القسم
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Section">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> المستودع
                                                </span>
                                            </div>
                                            <select class="selectpicker" name="most">
                                            <?php
                                            $query = 'select name from warehouse';
                                            $result = mysqli_query($conn, $query);
                                            $counter = 0;
                                            while($row = mysqli_fetch_assoc($result)){
                                                
                                                echo '<option>' . $row['name'] . '</option>';
                                            } 
                                            ?>
                                        
                                            </select>
                                        </div>
                                       
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    سعر الشراء</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="price" id="z" onchange="sum()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    سعر الشحن</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Shipping" id="a" onchange="sum()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    ثابتين</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Stable" id="y" onchange="sum()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    الصدقة </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Charity" id="x" onchange="sum()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    نسبة الربح</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Profit" id="r" onchange="summ(), c()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    نسبة الضريبة </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Tax" id="n" onchange="b(), c()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    نسبة الرسوم الادارية </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fees" id="m" onchange="summm(),c()">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    نسبة الخصم </span>
                                            </div>
                                            <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="disc">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                                    الكمية </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Currenttt">
                                        </div>

                                        <div class="input-group input-group-sm mb-3">


                                            <input type="file" class="input-group-text" name="UpdateFile">

                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> مجموع الثوابت</th>
                                                    <th> محموع النسب </th>
                                                    <th> قيمة الربح </th>
                                                    <th> قيمة الرسوم الادارية </th>
                                                    <th> قيمة الضريبة </th>
                                                    <th> المبلغ المضاف </th>
                                                    <th> مبلغ البيع </th>

                                                </tr>
                                                <tr>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="total" id="txtresult" onchange="summ() ,summm()" onclick="g(), h()" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="totaln" id="txtresultt" onchange="c()" onclick="g()" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="lucre" id="txtresulttt" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="lucread" id="txtresultttt" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="rebh" id="txtresulttttt" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="mdaf" id="txtresultttttt" onclick="g(), h()" readonly></td>
                                                    <td><input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="bia" id="txtresulttttttt" onclick="h()" readonly></td>
                                                </tr>

                                            </thead>
                                            <tbody>






                                            </tbody>
                                        </table>

                                        <div class="btn-group btn-group-lg m-auto button-group" role="group" aria-label="Basic example">

                                            <button type="submit" class="btn btn-danger" name="submit">إضافةالمنتج</button>
                                            <button type="submit" class="btn btn-danger">طباعة الباركود </button>
                                            <button type="submit" class="btn btn-danger ">طباعة المخزن والقسم</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $Product = $_POST['Product'];
        $Category = $_POST['Category'];
        $Barcode = $_POST['Barcode'];
        $storee = $_POST['storee'];
        $Section = $_POST['Section'];
        $most = $_POST['most'];
        $price = $_POST['price'];
        $Shipping = $_POST['Shipping'];
        $Stable = $_POST['Stable'];
        $Charity = $_POST['Charity'];
        $Profit = $_POST['Profit'];
        $Tax = $_POST['Tax'];
        $fees = $_POST['fees'];
        $disc = $_POST['disc'];
        $Current = $_POST['Currenttt'];
        $location = 'img';
        $name = $_FILES['UpdateFile']['name'];
        $tmp_name = $_FILES['UpdateFile']['tmp_name'];
        move_uploaded_file($tmp_name, __DIR__."/$location/$name");
        //     var_dump($x);
        // die;
        $too = $_POST['total'];
        $totaln = $_POST['totaln'];
        $lucre = $_POST['lucre'];
        $lucread = $_POST['lucread'];
        $rebh = $_POST['rebh'];
        $mdaf = $_POST['mdaf'];
        $bia = $_POST['bia'];

        $sql = "insert into prodect(Product, Category, Barcode, storee, Section, most, price, Shipping, Stable, Charity, Profit, Tax, fees, disc, Currenttt, total, totaln, lucre, lucread, rebh, mdaf, bia, name)
             values('$Product', '$Category', '$Barcode', '$storee', '$Section', '$most', '$price', '$Shipping', '$Stable', '$Charity', '$Profit', '$Tax', '$fees', '$disc', '$Current', '$too', '$totaln', '$lucre', '$lucread', '$rebh', '$mdaf', '$bia', '$name')";
        mysqli_query($conn, $sql);
        // var_dump($sql);
        // die;

    }
    ?>





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
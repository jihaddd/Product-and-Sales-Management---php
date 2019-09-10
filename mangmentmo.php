<html>

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
    <!-- <script>
        $(document).ready(function() {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "serchemost.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script> -->
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
                                                                إضافة الاصناف المسترجعة </span>
                                                    </div>

                                                </td>
                                                <td>

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                        <a href="talfmost.php">
                                                                إضافة الاصناف التالفة </span>
                                                    </div>

                                                </td>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                    <br>
                                    <form action="mangmentmo.php" class="forms" method="POST" enctype="multipart/form-data">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                بحث باسم المستودع </span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="search" id="search_text">
                                        <button type="submit" class="btn btn-danger" name="submit">بحث</button>
                                    </div>
                                    
                                    </form>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> اسم المستودع </th>
                                                <th> عدد المنتجات الجيدة </th>
                                                <th> عدد المنتجات المسترجعة </th>
                                                <th>عدد المنتجات التالفة </th>
                                                <th>موقع المستودع </th>




                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                               
                                            <?php
                                            include 'config.php';
                                            if (isset($_POST['search'])) {
                                                $search = $_POST['search'];
                                                $query= " SELECT warehouse.id, warehouse.name, warehouse.locetion, COUNT(prodect.idd) As Total,
                                                COUNT(remost.id) AS Totall FROM warehouse INNER JOIN prodect ON warehouse.name=prodect.most 
                                                INNER JOIN remost ON warehouse.name=remost.most 
                                                and warehouse.name='" . $search . "'   
                                                GROUP BY warehouse.id, warehouse.name, warehouse.locetion ";
                                                
                                            }
                                            else
                                            $query = 'SELECT warehouse.id, warehouse.name, warehouse.locetion,
                                            (SELECT COUNT(prodect.idd) As Total FROM prodect WHERE warehouse.name=prodect.most) AS prodect ,
                                            (SELECT COUNT(remost.id) As Total FROM remost WHERE warehouse.name=remost.most) AS remost,
                                            (SELECT COUNT(talmost.id) As Total FROM talmost WHERE warehouse.name=talmost.most) AS talmost
                                             FROM warehouse                                     
                                            GROUP BY warehouse.id, warehouse.name, warehouse.locetion';
                                            //$query = "select body from Comment where id=" . $id . ";";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['id'] . '</td>';
                                                echo '<td> <a href="vewi.php?most='.$row['name'].'"> ' . $row['name'] . '</td>';
                                                echo '<td>' . $row['prodect'] . '</td>';
                                                echo '<td>' . $row['remost'] . '</td>';
                                                echo '<td>' . $row['talmost'] . '</td>';
                                                echo '<td>' . $row['locetion'] . '</td>';
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

                    <!-- SELECT warehouse.id, warehouse.name, warehouse.locetion, COUNT(prodect.idd) As Total FROM warehouse INNER JOIN prodect ON warehouse.name=prodect.most and warehouse.name="x" GROUP BY warehouse.id, warehouse.name, warehouse.locetion  -->


                </div>

            </div>

        </div>



</body>

</html>
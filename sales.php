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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <?php
    include "config.php";
    // include 'fetch.php';
    // echo $_POST['Tax'];


    //     $tax=$_POST['Tax'];
    //     $Quantity=$_POST['Quantity'];

    //      $sql = "insert into test(Tax, Quantity)
    //      values('$tax', '$Quantity')";
    // mysqli_query($conn, $sql);


    ?>

    <script>
        $(document).ready(function() {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "fetch.php",
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
    </script>

    <script>

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

                                    <form action="" method="POST" class="forms" id="fupForm" name="form1">

                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">بحث الباركود </span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="search_text" id="search_text">

                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">التاريخ </span>
                                            </div>
                                            <input type="date" class="form-control" name="date" id="dat" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>

                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">طريقة الدفع</span>
                                            </div>
                                            <input type="text" class="form-control" name="Payment" id="Payment" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">رقم الفاتورة</span>
                                            </div>
                                            <input type="text" name="num" id="num" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">مستلم المدفوعات </span>
                                            </div>
                                            <input type="text" name="Recipient" id="Recipient" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">رقم الجوال </span>
                                            </div>
                                            <input type="text" name="phone" id="phone" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div id="result"></div>


                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> الكمية</span>
                                            </div>
                                            <input type="number" name="Quantity" id="Quantity" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>

                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"> تنفيذ الخصم</span>
                                            </div>
                                            <input type="number" name="dec" id="xxx" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">إجمالي المبيعات </span>
                                            </div>
                                            <input type="number" name="Total" id="Total" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onclick="summ()" readonly>
                                        </div>

                                        <div class="btn-group btn-group-lg m-auto button-group" role="group" aria-label="Basic example">
                                            <button type="submit" id="butsave" name="submit" class="btn btn-danger ">تنفيذ العملية</button>
                                          
                                            <button type="" class="btn btn-danger">طباعة الفاتورة</button>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> الصنف </th>
                                                    <th> الكمية </th>
                                                    <th> إجمالي البيع </th>



                                                </tr>
                                            </thead>
                                            <?php
                                            include 'config.php';
                                            $query = 'select * from test WHERE dat=CURRENT_DATE()';

                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                echo '<tr>';

                                                echo '<td>' . $row['id'] . '</td>';
                                                echo '<td>' . $row['product'] . '</td>';
                                                echo '<td>' . $row['Quantity'] . '</td>';
                                                echo '<td>' . $row['Total'] . '</td>';
                                                echo '</tr>';
                                            }

                                            ?>
                                        </table>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <script type='text/javascript'>
            $("#fupForm").submit(function(event) {
                event.preventDefault();

                var dat = $('#dat').val();
                var Payment = $('#Payment').val();
                var num = $('#num').val();
                var Recipient = $('#Recipient').val();
                var phone = $('#phone').val();
                var product = $('#product').val();
                var bia = $('#bia').val();
                var disc = $('#disc').val();
                var tax = $('#tax').val();
                var most = $('#most').val();
                var section = $('#section').val();
                var Quantity = $('#Quantity').val();
                var dec = $('#xxx').val();
                var Total = $('#Total').val();

                // var tax = $('#tax').val();
                // var quantity = $('#Quantity').val();


                $.ajax({
                    type: 'POST',
                    data: {
                        dat_filed: dat,
                        Payment_filed: Payment,
                        num_filed: num,
                        Recipient_filed: Recipient,
                        phone_filed: phone,
                        Product: product,
                        Bia: bia,
                        Disc: disc,
                        Tax: tax,
                        Most: most,
                        Sectionn: section,

                        Quantityy: Quantity,
                        xxx: dec,
                        Totall: Total

                        // tax_field: tax,
                        // quantity_field: quantity

                    },
                    url: 'insert.php',
                });

                $('#fupForm')[0].reset();
            });

            function summ() {

                var xx = parseInt(document.getElementById("bia").value);
                var yy = parseFloat(document.getElementById("tax").value);
                var z = parseFloat(document.getElementById("xxx").value);
                var t = parseFloat(document.getElementById("Quantity").value);
                var summm = t * xx;
                var result = summm + yy - z;

                document.getElementById("Total").value = result;
            }
        </script>




</body>

</html>
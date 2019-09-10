

<?php 
echo 'jihad';
    include "config.php";
     $dat = $_POST['dat_filed'];
     $Payment = $_POST['Payment_filed'];
     $num = $_POST['num_filed'];
     $Recipient = $_POST['Recipient_filed'];
     $phone = $_POST['phone_filed'];
     $product = $_POST['Product'];
     $bia = $_POST['Bia'];
     $disc= $_POST['Disc'];
     $taxx = $_POST['Tax'];
     $mostt = $_POST['Most'];
     $Sectionn = $_POST['Sectionn'];
     $Quantityy = $_POST['Quantityy'];
     $decc = $_POST['xxx'];
     $Totall = $_POST['Totall'];
    
    // $quantity = $_POST['quantity_field'];
    // $tax = $_POST['tax_field'];

    $sql = "insert into test (dat, Payment, num, Recipient, phone, product, bia, disc, tax, most, Section, Quantity, xxx, Total) values('$dat','$Payment','$num','$Recipient','$phone','$product','$bia','$disc','$taxx','$mostt','$Sectionn','$Quantityy','$decc','$Totall')";
   
    mysqli_query($conn, $sql);
    // 
    // , '$product','$bia','$disc','$taxx','$mostt','$Sectionn'
    // (date, Payment, num, Recipient, phone, Product, amount, Allowable, Tax, most, secshen, Quantity, dec, totax)
    // values('$dateee', '$Paymentt', '$numm', '$Recipientt', '$phonee', '$productt', '$biaa', '$discc', '$taxx', '$mostt', '$Sectionn', '$Quantityy', '$decc', '$Totall)";
?>


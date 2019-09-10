<?php

include "config.php";

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
 select Product,bia, disc, Tax, Section, most from prodect 
  WHERE Barcode =".$search."
 ";
}

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
  <table class="table table bordered">
  <tr>
  <th> الصنف </th>
  
 
  <th> السعر</th>
  <th> نسبة الخصم المسموحة</th>
  <th> نسبة الضريبة</th>
  <th> المستودع </th>
 
  <th> القسم</th>
  


</tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr class="db-data">
    
    <form id="fupForm">

    <td><input type="text" value="'.$row["Product"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="product" id="product" readonly></td>
    <td><input type="text" value="'.$row["bia"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="bia" id="bia" readonly></td>
    <td><input type="text" value="'.$row["disc"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="disc" id="disc" readonly></td>
    <td><input type="text" value="'.$row["Tax"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Tax" id="tax" readonly></td>
    <td><input type="text" value="'.$row["most"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="most" id="most" readonly></td>
    <td><input type="text" value="'.$row["Section"].'" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Section" id="section" readonly></td>

   </tr>

   </form>
  ';
 }
 echo $output;
}

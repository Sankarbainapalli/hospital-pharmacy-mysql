<?php

require("include/connection.php");


$name=$_POST['name'];
$fathername=$_POST['fathername'];
$mobilenumber=$_POST['mobilenumber'];
//  $bloodgroup=$_POST['bloodgroup'];
// $attachment=$_POST['attachment'];
// $dateofbirth=$_POST['dateofbirth'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$doctor=$_POST['doctorname'];
$gender=$_POST['sex'];
$age=$_POST['age'];



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><button class="btn">Print table</button></p>
<h1 id="dataTable">submit forms</h2>
<?php
echo "<p>Name:$name </p>";
echo "<br>";
 echo "Phonenumber:$mobilenumber";  
?>


  <script src="jquery.min.js"></script>
     <script>
     $('.btn').click(function(){
       var printme = document.getElementById('dataTable');
       var wme = window.open("","","");
       wme.document.write(printme.outerHTML);
       wme.document.close();
       wme.focus();
       wme.print();
       wme.close();
     })
     </script>
</body>
</html>
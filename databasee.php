<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
       
       $conn = mysqli_connect("localhost","root","","NDENZA");
         
       $sele = "SELECT * from image";
       $query = mysqli_query($conn,$sele);

       $row =mysqli_fetch_array($query);

       while($row)
       {
        
        $number = $row['jmwisho'];

       }

       echo($number);

    

      ?>






</body>
</html>
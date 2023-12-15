<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php

$conn = mysqli_connect("localhost","root","","bloodbank_db") or die("connection failed");
$query = "SELECT * FROM donation";

$result = mysqli_query($conn,$query) or die("query is failed");

?>
<body  style="background-color:Antiquewhite;">>
    <table border="1">
<tr>
<th>Donator name </th>
<th>Blood Group</th>
<th>Disease </th>
<th>unit</th>

</tr>
<?php

while($row = mysqli_fetch_assoc($result))
{

?>
<tr>

<td> <?php echo $row['d_name'] ?>  </td>
<td> <?php echo $row['group'] ?>  </td>
<td> <?php echo $row['disease'] ?>  </td>
<td> <?php echo $row['unit']  ?> </td>

    


</td>
</tr>

<?php
}
?>

    </table>
</body>
</html>
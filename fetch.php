<?php
$conn = mysqli_connect("localhost","root","","car_db");
$query = "SELECT * FROM car_tbl";
$result = mysqli_query($conn,$query);
if($result){
    echo "Connected Successfully!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">

</head>
<body>
    <table class="table">
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">PHONE NUMBER</th>
        <th scope="col">CAR</th>
<?php
while($row = mysqli_fetch_assoc($result)){
       echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['car']."</td>
        </tr>";
    }
        ?>
    </table>
</body>
</html>
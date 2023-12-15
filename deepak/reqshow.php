<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:plum;">
    <table border="1">
        <tr>
            <th>Donator name</th>
            <th>Blood Group</th>
            <th>Disease</th>
            <th>Unit</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "bloodbank_db");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT d_name, `group`, disease, unit FROM patientdonation";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['d_name']; ?></td>
                    <td><?php echo $row['group']; ?></td>
                    <td><?php echo $row['disease']; ?></td>
                    <td><?php echo $row['unit']; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "No records found";
        }

        // Close the connection
        mysqli_close($conn);
        ?>

    </table>
</body>
</html>

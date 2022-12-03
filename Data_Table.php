<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$age = $_POST['age'];
$school = $_POST['school'];
$gender = $_POST['gender'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/formStyle.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Age</th>
                <th scope="col">Full Name</th>
                <th scope="col">Gender</th>
                <th scope="col">School</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $first_name.' '.$last_name ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $school ?></td>
            </tr>
            <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> -->
        </tbody>
    </table>

</body>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

</html>
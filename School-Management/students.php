<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-Link-Start-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Meta-Link-End-->
    <!--Site Title-->
    <title>School Management || Login Page</title>
    <!--Site Faveicon-->
    <link rel="shortcut icon" href="assets/image/FaveIcon.png" type="image/x-icon">
    <!--Font-link-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Style-Link-Start-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Style-Link-End-->
</head>

<body>
    <div class="row">
        <div class="col-md-10 col-lg-8 m-auto">
            <div class="card text-start">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $hostName = "localhost";
                            $userName = "root";
                            $password = "password";
                            $databaseName = "School_Management";

                            $conn = mysqli_connect($hostName, $userName, $password, $databaseName);
                            $sql = "SELECT * FROM `users`";
                            $query = mysqli_query($conn, $sql);
                            while ($user = mysqli_fetch_assoc($query)) {

                            ?>
                                <tr>
                                    <td><?= $user["id"] ?></td>
                                    <td><?= $user["name"] ?></td>
                                    <td><?= $user["email"] ?></td>
                                    <td><?= $user["phone"] ?></td>
                                    <td><?= $user["gender"] ?></td>
                                    <td><?= $user["photo"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/solid.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
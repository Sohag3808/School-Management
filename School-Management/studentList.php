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
    <section class="studentList-section">
        <div class="container">
            <div class="row">
                <div class="col my-5 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="cardTitleBox mb-5 d-flex justify-content-between align-items-center">
                                <h5 class="card-title chartTitle">All Students</h5>
                              <a href="#" class="btn btn-info text-light">Add New Student</a>
                            </div>
                            <div class="table-responsive-lg">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><strong>Id</strong></th>
                                            <th><strong>Photo</strong></th>
                                            <th><strong>Name</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Password</strong></th>
                                            <th><strong>Gender</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>
                                                <div class="studentImage">
                                                    <img src="assets/image/StudentPic.jpg" alt="" width="100%">
                                                </div>
                                            </td>
    
                                            <td>Md Sohag Sheke</td>
                                            <td>sohag@gmail.com</td>
                                            <td>123456@.</td>
                                            <td>Male</td>
                                            <td class="tableAction">
                                                <div class="action-icon">
                                                    <a href="#" class="Circleicon"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="Circleicon"><i class="fa-solid fa-eye"></i></a>     
                                                    <a href="#" class="Circleicon"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
    
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/solid.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
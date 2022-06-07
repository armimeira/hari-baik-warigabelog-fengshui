<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wariga Belog & Fengshui App</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>" class="csrf">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <title><?= $title; ?></title>
    <base href="/">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="datatable/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-6 col-md-10 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">WaFe</span> App</h1>
                <p class="m-0">WaFe (Wariga Belog and Fengshui) Application being part of IMS 2022 task from the lecturer.</p>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary mb-4">Our Contact Info</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Kampus Bukit Jimbaran, Badung, Bali, Indonesia</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>08993765271 / 081667342894</p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary mb-4">Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Fengshui Page</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Wariga Belog Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">IMS 2022</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="datatable/js/jquery.dataTables.min.js"></script>
    <script src="datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script src="bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?= $this->renderSection('scripts'); ?>
</body>

</html>
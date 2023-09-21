<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TomoKenko</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@600&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body id="page-top">

 <!-- NAVBAR -->
 @include('layouts.includes._navbar')
<!-- END NAVBAR -->

 <!-- MAIN -->
 @yield('content')
<!-- END MAIN -->

<div class="clearfix"></div>
</div>
<footer class="text-center py-5" style="background-color: #dee2e6;">
    <div class="container px-5">
        <div class="text-black-50 small">
            <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
        </div>
    </div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jqueryslimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery.easy-piechart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
 </script>
</body>
</html>

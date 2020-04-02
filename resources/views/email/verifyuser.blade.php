<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify</title>
    <!-- Bootstrap Styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- FontAwesome Styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- Morris Chart Styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/moris/moris-0.4.3.min.css')}}">
    <!--<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" /> -->
    <!-- Custom Styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom-styles.css')}}">
    <!--<link href="assets/css/custom-styles.css" rel="stylesheet" />-->
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <?php 
    if(isset($_GET['alert'])){
      if($_GET['alert']=="belum_verifikasi"){
        echo "<script>alert(\"ANDA BELUM VERIFIKASI EMAIL\")</script>";
      }else if($_GET['alert']=="belum_terdaftar"){
        echo "<script>alert(\"ANDA SUDAH TERDAFTAR\")</script>";
      }
    }
?>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Tokoan</a>
            </div>
        
        </nav>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Hello {{ $user['name'] }},
                        </div>
                        <div class="panel-body">
                         Please verify your email first by click on the link below to verify your email {{ $user['email'] }}
                        </div>
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              <a href="{{ url('user/verify',$user['email']) }}">Verifikasi</a>
                            </button>
                        </div>
                     </div>
 </div>

    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script> 
    <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script> 


</body>

</html>
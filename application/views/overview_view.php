<html>
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/21/2017-->
<!-- * Time: 5:32 PM-->
<!-- */-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  media="(min-width:1024px) and (max-width: 1024px)" >

    <title>Depalletizer Station </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/css/custom.min.css"); ?>" rel="stylesheet">
    <!--Style css-->
    <link href="<?php echo base_url("assets/css/style2.css"); ?>" rel="stylesheet">
<!--    <link href="--><?php //echo base_url('assets/bootstrap/css/bootstrap.min.css')?><!--" rel="stylesheet">-->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-toggle-master/css/bootstrap-toggle.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap-toggle-master/js/bootstrap-toggle.min.js')?>"></script>


    <script src="<?php echo base_url('assets/jquery/jquery-2.2.4.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>


</head>
<body>
<div class="container-fluid">
    <div class="col-md-12 top_header">
        <div class="col-md-3 " style="float: left">
            <img src="<?php echo base_url("img/logo/sarihusadapng.png");?>"  class="img-responsive"  width="70%" height="30%" " />
        </div>
        <div class="col-md-6" style="text-align: center;font-family: 'Arial Black';margin-top: 1em;color: #666666;">
            <h1 style="font-size: 26px">DEPALLETIZER STATION</h1>
        </div>
        <div class="col-md-3" >
            <div style="float:right">

                 <div class="clock" style="font-family: 'Arial Black';color: #0f0f0f;font-size: 24px;margin-right: 4px;"></div>
                <div class="date" style="font:'Arial Black';color: #0f0f0f;font-size: 18px;float:right"></div>
<!--            </div>-->
        </div>
    </div>
    <div class="col-md-12" style="padding-left: 1px">
        <div class="col-md-2 fluid" style="list-style: none;padding-left: 1px" >
                <li><a href="<?php echo site_url('Overview/display'); ?>"><button class="button_bar" >OVERVIEW</button></a></li>
                <li><a href="<?php echo site_url('Operation/display'); ?>"><button class="button_bar" >OPERATION</button></li></a>
                <li><a href="<?php echo site_url('Setting/display'); ?>"><button class="button_bar" >SETTING</button></li></a>
                <li><a href="<?php echo site_url('Report/display'); ?>"><button class="button_bar" >REPORT</button></li></a>
                <li><a href="<?php echo site_url('Log/display'); ?>"><button class="button_bar">LOG</button></li></a>
        </div>
        <div class="col-md-10" style="padding-left: 2px;">

            <?php $this->load->view($content_view) ?>
        </div>
    </div>
 </div>
<div class="footer_top"></div>
<div class="footer">
     <div class="col-md-6 float-lg-left" style="text-align: left;padding-top: 6.5px;">
        <img src="<?php echo base_url("img/logo/ETRONICS_LOGO_WHITE_v1.0.png");?>"  width="20%" class="img-responsive"  />
    </div>
    <p class="col-md-6 float-lg-right" style="text-align: right"> V180503012018<br>© Copyright By PT ETRONIKA MAHAKARYA TEKNOLOGI</p>
</div>

<!-- clock-->
<script>
    // 24 hour clock
    setInterval(function() {

        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var date = currentTime.getDate();
        var month = currentTime.getMonth();
        var year = currentTime.getFullYear();

        // Add leading zeros
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Compose the string for display
        var currentTimeString = hours + ":" + minutes + ":" + seconds;
        $(".clock").html(currentTimeString);

        // Compose the string for display date
        var currentDateString = date + "/" + (month+1) + "/"+ year;
        $(".date").html(currentDateString);
    }, 1000);
</script>


<!--<script language="JavaScript"  src="--><?php //echo base_url("assets/jquery/dist/jquery.min.js"); ?><!--"></script>-->
<!-- Bootstrap -->
<script language="JavaScript" src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url("assets/js/custom.min.js"); ?>"></script>
<!--clock-->
<!--<script  language="JavaScript" src="--><?php //echo base_url("assets/js/jquery.min.js");?><!--"> </script>-->

</body>
</html>

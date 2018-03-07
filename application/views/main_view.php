<html>
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/14/2017-->
<!-- * Time: 10:23 AM-->
<!-- */-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Design User Interface App Sarihusada </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url("assets/animate.css/animate.min.css"); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/css/custom.min.css"); ?>" rel="stylesheet">
    <!--Style css-->
    <link href="<?php echo base_url("assets/css/style2.css"); ?>" rel="stylesheet">

</head>

<body>
    <div class="container">

<!--Navbar-->
        <div class="col-md-12">
            <div class="col-md-2">
                <div class="image">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <img src="<?php echo base_url("img/logo/ETRONICS_LOGO.png");?>" style="margin-top:30px;" class="img-responsive" >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-center ">
                <div class="center-block">
                        <h1>Depalletizer System</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <img src="<?php echo base_url("img/logo/sarihusadapng.png");?>" style="float:right" class="img-responsive" >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<!--/navbar-->

<!-- left bar-->
        <div class="col-md-12">
            <div class="col-md-2">
                <div class="left_bar">
                    <div class="clearfix"></div>

                    <button type="button" class="btn">Overview</button>
                    <div class="clearfix"></div>

                    <button type="button" class="btn">Operator</button>
                    <div class="clearfix"></div>

                    <button type="button" class="btn">Options </button>
                    <div class="clearfix"></div>

                    <button type="button" class="btn"> Reports </button>
                    <div class="clearfix"></div>

                    <button type="button" class="btn">Audit Trial</button>

                </div>
            </div>
<!-- /leftbar-->

<!-- contain overview-->

            <div class="col-md-10">
                <div class="content_main" >
                     <div class="col-md-12">
                         <div class="header_overview">
                             <div class="col-md-9">
                                 <h2>Overview</h2>
                             </div>
                             <div class="col-md-2" >
                                 <span class=" fa fa-user"></span>
                                 <span> PIC </span>
                                 <span>John Doe</span>
                             </div>
                             <div class="col-md-1">
                                 <div class="btn_logout">
                                     <button type="button" class="btn btn-danger">Log Off</button>
                                 </div>
                            </div>
                         </div>
                     </div>

                    <div class=""col-md-12">
                        <div class="col-md-6"> <!-- left box/printer box -->
                            <div class="printer_box">

                                <div class="col-md-8">
                                    <div class="tittle_box">
                                        <form>
                                            <input type="text" class="form-control" placeholder="PRINT & APPLY LABEL APPLICATOR" readonly>
                                        </form>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div >
                                    <div class="button_printer">
                                        <button type="button" class="btn">Get</button>
                                        <button type="button" class="btn">Submit</button>
                                        <button type="button" class="btn">Send</button>
                                    </div>
                                </div>

                                <div class="clearfix"></div

                                <div>
                                    <div class="text-area">
                                        <div class="col-md">

                                            <div class="col-md-8">
                                                <div class="button_lamp">
<!--                                                    tolong style nya simpen di style css sa :))-->
                                                    <button type="button" class="btn btn-success" style="width:6em;" disabled>
                                                        <img src="<?php echo base_url("img/icon/lampicon.png");?>"  class="img-responsive" >
                                                    </button>
                                                    <button type="button" class="btn btn-warning" style="width:6em;" disabled>
                                                        <img src="<?php echo base_url("img/icon/lampicon.png");?>" class="img-responsive" >
                                                    </button>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" style="width:6em;" disabled>
                                                        <img src="<?php echo base_url("img/icon/lampicon.png"); ?>" class="img-responsive">
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div>
                                                    <textarea type="text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A est ex molestiae nesciunt non suscipit voluptatum! Aperiam corporis cupiditate, delectus dolor eius, eligendi est hic id perferendis placeat suscipit voluptatem.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores ea explicabo fugit illum labore libero necessitatibus neque officiis omnis quaerat, ratione reiciendis, sapiente sunt tempore veritatis vitae! Accusantium, eligendi.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda consequuntur distinctio eaque eos eveniet facere ipsa magnam obcaecati odit quia quisquam sit, ut? Accusamus nihil possimus saepe tenetur voluptatum?
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="right_box">
                                                    <form>
                                                        <input type="text" class="form-control" placeholder="Username" required="" />
                                                        <div
                                                        <input type="text" class="form-control" placeholder="Username" required="" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="camera_box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--/contain overview-->


 </div> <!-- /container -->

    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url("assets/jquery/dist/jquery.min.js"); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/fastclick/lib/fastclick.js"); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url("assets/nprogress/nprogress.js"); ?>"></script>
    <!-- Custom Theme Scripts -->
    <!--<script src="--><?php //echo base_url("assets/js/custom.min.js"); ?><!--"></script>-->
</body>
</html>

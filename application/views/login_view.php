<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/14/2017
 * Time: 11:04 AM
 */?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  media="all and (max-width: 1024px)" >

    <title>Depalletizer Sarihusada </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/css/custom.min.css"); ?>" rel="stylesheet">
    <!--Style css-->
    <link href="<?php echo base_url("assets/css/style2.css"); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <!--Header-->
            <div class="col-md-8 col-md-offset-2">
                <div class="date_box">
                    <div class="clock"></div>
                    <div class="date"></div>
                </div>
            </div>

        <!--body-->
            <div class="col-md-8 col-md-offset-2 jumbotron">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img src="<?php echo base_url("img/logo/sarihusadapng.png");?>" style= height:15%;" class="img-responsive" >
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="col-md-6 col-md-offset-3 jumbotron_login">
                    <form action="<?php echo site_url('Main/validate'); ?>" method="post" >
                        <div class="col-md-6 form_login">
                            <select  id="username" name ="username" value="value" class="form-control" style="width: 10em;" required>
                                <?php foreach ($list_user->result()as $row)
                                { ?>
                                <option <?php $id_username=$row->userid; ?>><?php echo$row->username;  ?>  </option>
                                <?php } ?>

                            </select>
                                <input type="text" id="code" name="code" required="required" maxlength="8" class="form-control" placeholder="PIN" style="margin-top: 1em;width: 10em" >
                            <br>
                            <button class="btn btn-success" style="float: right; ">Login</button>
                        </div>

                       <div class="col-md-6">

                               <table id="keypad" cellpadding="5" cellspacing="3">
                                   <tr>
                                       <td onclick="addCode('1');">1</td>
                                       <td onclick="addCode('2');">2</td>
                                       <td onclick="addCode('3');">3</td>
                                   </tr>
                                   <tr>
                                       <td onclick="addCode('4');">4</td>
                                       <td onclick="addCode('5');">5</td>
                                       <td onclick="addCode('6');">6</td>
                                   </tr>
                                   <tr>
                                       <td onclick="addCode('7');">7</td>
                                       <td onclick="addCode('8');">8</td>
                                       <td onclick="addCode('9');">9</td>
                                   </tr>
                                   <tr>
                                       <td onclick="clearall();">clear</td>
                                       <td onclick="addCode('0');">0</td>
                                       <td onclick="del();">del</td>
                                   </tr>
                               </table>
                       </div>
                    <p id="message">Logging in ...</p>

                    </form>

                </div>

                <div class="col-md-6 col-md-offset-3">
                   <div class="footer_login">
                       <h4>DEPALLETIZER STATION</h4>
                   </div>
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
<!--    /clock-->

<!--numpad-->

    <script type="text/javascript">
            function addCode(key)
            {
                var code = document.forms[0].code;
                if(code.value.length < 8 ){
                    code.value = code.value + key;

                }
                if (code.value.length != 8) {
                } else {
                    document.getElementById("message").style.display = "block";
                    setTimeout(submitForm, 1000);
                }
            }

            function del()
            {
                var code = document.getElementById("code");
                code.value = code.value.substr(0, code.value.length - 1);
            }

            function clearall()
            {
                var code = document.getElementById("code");
                code.value = code.value.substr(0, code.value.length - 8);
            }


        function submitForm(){
            document.forms[0].submit();
        }

        function emptyCode(){
            document.forms[0].code.value = "";
        }
    </script>


<!--/numpad-->

<!-- jQuery -->
<script src="<?php echo base_url("assets/jquery/dist/jquery.min.js"); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
<!-- Custom Theme Scripts -->
<!--<script src="--><?php //echo base_url("assets/js/custom.min.js"); ?><!--"></script>-->
<!--clock-->
    <script src="<?php echo base_url("assets/js/jquery.min.js");?>"> </script>
</body>
</html>




<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/22/2017-->
<!-- * Time: 5:00 PM-->
<!-- */-->

<!--Log Tittle-->
<div class="col-md-12 tittle_box">
    <div class="col-md-8">
        <h5 style="font-family: 'Arial Black'">LOG</h5>
    </div>
    <div class="col-md-2"style="margin-top: 8px;">
        <??>
        <img src="<?php echo base_url("img/icon/user.png");?>" alt="user" width="20" height="20" ">
        <label style="font-family: Arial;color: #FFFFFF"">PIC:</label>
        <?php foreach ($user_data->result() as $data){ ?>
            <label style="font-family: 'Arial';font-style: inherit;color: #FFFFFF""><?php echo $data->username; ?> </label>
        <?php }?>
    </div>
    <div class="col-md-2" >
        <a href="<?php echo base_url('index.php/Main/logout');?> "><button class="button_logout">LOGOUT</button></a>
    </div>
</div>
<!--/Log Tittle-->

<div style="margin-top: 3.5em"></div>
<!--Body Overview-->
<div class="col-md-12 body_box" style="float: right" >
    <div class="col-sm-5 wrap wrap3" style="margin-left: 2.7em">
        <div class="col-md-12">
            <div class="col-md-8"><h4> Palet</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log -align-left"  readonly>
<?php echo readfile("logs/id_palet/001_ID_Palet.log");?>

            </textarea>
        </div>
    </div>
    <div class="col-sm-5 wrap wrap3" style="margin-left: 5em">
        <div class="col-md-12">
            <div class="col-md-8"> <h4>Printer Bag</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log" readonly>

<?php

$file = new SplFileObject("logs/id_bag/001_ID_Bag.log");

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.
    echo $file->fgets();
}

// Unset the file to call __destruct(), closing the file handle.
$file = null;?>

     </textarea>
        </div>

    </div>
    <div class="col-sm-5 wrap wrap3" style="margin-left: 2.7em">
        <div class="col-md-12">
            <div class="col-md-8"><h4>Camera</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log" readonly>
<?php

$file = new SplFileObject("logs/camera/001_Camera.log");

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.
       echo $file->fgets();
       }

// Unset the file to call __destruct(), closing the file handle.
       $file = null;?>
            </textarea>
        </div>
    </div>
    <div class="col-sm-5 wrap wrap3" style="margin-left: 5em">
        <div class="col-md-12">
            <div class="col-md-8"> <h4>Depalletizer Station</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log" readonly>
<?php

$file = new SplFileObject("logs/system/3-14-2018_10-54_System.log");

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.
    echo $file->fgets();
}

// Unset the file to call __destruct(), closing the file handle.
$file = null;?>
            </textarea>
        </div>

    </div>
</div>
<!--/Body Overview-->

<script>
    var time = 0;
    setInterval(function() {
        $.ajax({
            type: "POST",
            data: {time : time},
            url: "log/fileupdate.php",
            success: function (data) {
                var result = $.parseJSON(data)
                if (result.content) {
                    $('#file_content').append('<br>' + result.content);
                }
                time = result.time;
            }
        });
    }, 1000);
</script>
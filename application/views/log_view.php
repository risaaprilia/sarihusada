
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
        <label style="font-family: 'Arial';font-style: inherit;color: #FFFFFF""><?php echo  $this->session->userdata('username');?></label>
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
            <div class="col-md-8"><h4>Printer</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log"  readonly>
                <?php echo readfile("log/3-14-2018_10-54_System.txt");?>

            </textarea>
        </div>
    </div>
    <div class="col-sm-5 wrap wrap3" style="margin-left: 5em">
        <div class="col-md-12">
            <div class="col-md-8"> <h4>Printer</h4></div>
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url('img/icon/download.png')?>" width="30" height="30" style="float: right;margin-top: 1em">
                    <p style="float: right;font-size: 10px;">download</p>
                </a>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 0.5em">
            <textarea class="log" readonly>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, architecto aspernatur autem blanditiis consectetur dignissimos eius enim error eum eveniet molestiae nihil odio, odit quae, quasi rem repudiandae temporibus voluptate?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos ex expedita harum iusto labore laboriosam minima nemo, rerum tempora temporibus, vero voluptatum! Aspernatur dolorem necessitatibus quam quasi, soluta sunt.
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur neque obcaecati qui quo. Architecto consequatur cupiditate dolores ea excepturi inventore maiores molestias mollitia, quaerat quos sequi similique sunt tempora totam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur culpa excepturi labore, minima natus, nesciunt nisi odio officiis pariatur quisquam quod sapiente sunt totam vel, vitae voluptas! Debitis, dolor!
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, architecto aspernatur autem blanditiis consectetur dignissimos eius enim error eum eveniet molestiae nihil odio, odit quae, quasi rem repudiandae temporibus voluptate?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos ex expedita harum iusto labore laboriosam minima nemo, rerum tempora temporibus, vero voluptatum! Aspernatur dolorem necessitatibus quam quasi, soluta sunt.
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
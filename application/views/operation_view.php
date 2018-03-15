
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/22/2017-->
<!-- * Time: 2:15 PM-->
<!-- */-->

<!--Operation Tittle-->
<div class="col-md-12 tittle_box">
    <div class="col-md-8">
        <h5 style="font-family: 'Arial Black'">OPERATION</h5>
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
<!--/Operation Tittle-->

<div style="margin-top: 3.5em"></div>
<!--Body Overview-->
    <div class="col-md-12 body_box" >
        <div class="col-md-12 wrap2" >
                <!--Tab Printer Pallete-->
            <form method="post">
                    <div class="col-md-6 form_login">
                        <label> Select Job : </label>
<!--                        start of dropdown-->
                        <select  name="Job_id[]" id="start_job" class="form-control" style="width:100%" required>
                            <?php foreach ($job_list->result()as $row)
                            { ?>
                                <option value="<?php echo $row->job_id;?>" > <?php echo$row->job_name;  ?> </option>
                            <?php } ?>
                        </select>
                    </div>
<!--                end of dropdown-->
<!--               start of button-->
                    <div class ="col-md-6" >
                        <br/><br/>
                         <input type="submit" name="submit" class="btn btn-success" value="START" id="button_start" >
                        <input type="submit" name="stop" class="btn btn-success" value="STOP" id="button_stop" >
                  </div>
<!--                end if button-->
                </form>

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content1" id="device-tab" role="tab" data-toggle="tab" aria-expanded="true">Printer Pallet</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="split-tab" data-toggle="tab" aria-expanded="false">Printer Bag</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="backup-tab" data-toggle="tab" aria-expanded="false">Camera</a>
                        </li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="device-tab">
                            <div class="col-md-12 ">
                                <div class="col-md-8">
<!--                                    Start Of status lamp-->
                                    <div class="col-md-8">
<!--                                        --><?php //foreach ($job_list-> result()as $row){
//                                               $job_status =  $row->job_status;
//                                        if ($job_status == 1){?>
<!--                                        <button class="btn btn-success"> Start </button>-->
<!--                                        <button class="btn btn-warning disabled" > Warn </button>-->
<!--                                        <button class="btn btn-danger disabled"> Stop </button>-->
<!--                                        --><?php //} else  { ?>
                                            <button class="btn btn-success disabled"> Start </button>
                                            <button class="btn btn-warning disabled" > Warn </button>
                                            <button class="btn btn-danger disabled"> Stop </button>
<!--                                        --><?php // }}?>
                                    </div>
<!--                                    End Of Status Lamp-->

                                    <div class="col-md-12">
                                            <br><br>
                                                <label class="control-label">Pallete ID</label><br>
                                                <input type="text" placeholder="Example of Pallete ID" readonly> <br>
                                            <br>
                                        <div class="col-md-12" style="padding-left:0%">
                                            <div class="col-md-6" style="padding-left:0%">
                                                <label class="control-label">Pallete Number</label><br>
                                                <input type="text" placeholder="Example of pallete number" readonly><br>
                                            </div>
                                            <div class="col-md-6" style="padding-left:0%">
                                                <label class="control-label">Qty</label><br>
                                                <input type="text" placeholder="Example qty" readonly><br>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="col-md-12">
                                       <input type="text" placeholder="Printer Pallet" readonly>
                                   </div>
                                    <div class="col-md-12">
                                        <br><br>
                                        <img src="<?php echo base_url("img/device/printer-pallet.jpeg")?>" width="80%" height="auto">
                                    </div>
                                    <div class="col-md-12">
                                        <label> IP Port </label>
                                        <input type="text" placeholder="IP" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="split-tab">
<!--                            Tab Printer Bag-->
                            <div class="col-md-12 ">
                                <div class="col-md-8">
                                    <button class="btn btn-success disabled"> Start </button>
                                    <button class="btn btn-warning disabled" > Warn </button>
                                    <button class="btn btn-danger disabled"> Stop </button>

                                <div class="col-md-12">
                                    <br><br>
                                    <label class="control-label">Bag ID</label><br>
                                    <input type="text" placeholder="Example of Pallete ID" readonly> <br>
                                    <br>
                                    <div class="col-md-12" style="padding-left:0%">
                                        <div class="col-md-6" style="padding-left:0%">
                                            <label class="control-label">Pallete Number</label><br>
                                            <input type="text" placeholder="Example of pallete number" readonly><br>
                                        </div>
                                        <div class="col-md-6" style="padding-left:0%">
                                            <label class="control-label">Qty</label><br>
                                            <input type="text" placeholder="Example qty" readonly><br>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Printer Bag" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <br><br>
                                        <img src="<?php echo base_url("img/device/weber-print-apply.jpg")?>" width="80%" height="auto">
                                    </div>
                                    <div class="col-md-12">
                                        <label> IP Port </label>
                                        <input type="text" placeholder="IP" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="backup-tab">
<!--                            Tab Camera-->
                            <div class="col-md-12 ">
                                <div class="col-md-8">
                                    <button class="btn btn-success disabled"> Start </button>
                                    <button class="btn btn-warning disabled" > Warn </button>
                                    <button class="btn btn-danger disabled"> Stop </button>

                                    <div class="col-md-12">
                                        <br><br>
                                        <label class="control-label">Bag ID</label><br>
                                        <input type="text" placeholder="Example of Pallete ID" readonly> <br>
                                        <br>
                                        <div class="col-md-12" style="padding-left:0%">
                                            <div class="col-md-6" style="padding-left:0%">
                                                <label class="control-label">Pallete Number</label><br>
                                                <input type="text" placeholder="Example of pallete number" readonly><br>
                                            </div>
                                            <div class="col-md-6" style="padding-left:0%">
                                                <label class="control-label">Qty</label><br>
                                                <input type="text" placeholder="Example qty" readonly><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Camera Name" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <br><br>
                                        <img src="<?php echo base_url("img/device/teledyne-camera.jpg")?>" width="80%" height="auto">
                                    </div>
                                    <div class="col-md-12">
                                        <label> IP Port </label>
                                        <input type="text" placeholder="IP" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>


    </div>


        <?php
        if(isset($_POST['submit'])){
            foreach ($_POST['Job_id'] as $select)
                redirect('Operation/start_job/'.$select.'');

        }?>

        <?php
        if(isset($_POST['stop'])){
            foreach ($_POST['Job_id'] as $select)
                redirect('Operation/stop_job/'.$select.'');

        }?>

        <script>
            $('form').submit(function () {
                $(this).find("input[type='submit' and name='start']").prop('disabled',true);

            })

            function start_disabled(){
                document.getElementById("start_job").disabled =true;
            }

            function stop_disabled(){
                document.getElementById("start_job").disabled =true;
            }

        </script>

        <script>
            function status_lamp(){
                var status = 1; //0 stop, 1 start
                var lamp;

                if(status==1){
                    document.getElementById(lamp).innerHTML=' <button class="btn btn-success "> start </button><button class="btn btn-warning disabled" > Warn </button><button class="btn btn-danger disabled"> Stop </button>'
                }
            }
        </script>


<!--/Body Overview-->


<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/22/2017-->
<!-- * Time: 4:49 PM-->
<!-- */-->


<!--Setting Tittle-->
<div class="col-md-12 tittle_box">
    <div class="col-md-8">
        <h5 style="font-family: 'Arial Black'">SETTING</h5>
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
<!--/Setting Tittle-->

<div style="margin-top: 3.5em"></div>
<!--Body Overview-->
<div class="col-md-12 body_box" >
    <div class="wrap">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="device-tab" role="tab" data-toggle="tab" aria-expanded="true">Device</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="backup-tab" data-toggle="tab" aria-expanded="false">Backup</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="device-tab">
                    <div class="col-md-12 ">
                        <div class="col-md-5 device-box " style="margin-top:5px;margin-bottom: 5px;">
                            <div class="col-md-4">
                                <img src="<?php echo base_url("img/device/weber-print-apply.jpg")?>" width="80" height="80">
<!--                                <label style="font-size: 9px">CONNECTED</label><span class="fa fa-circle" style="color: #00CC00"></span>-->
<!--                                <label style="font-size:9px;display: none;">NOT CONNECT</label><span class="fa fa-circle" style="color:red;display: none; "></span>-->
                            </div>
                            <div class="col-md-8 device-font" >
                                <?php foreach ($data_table1->result() as $row){?>
                                <label class="control-label">Name</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_names;?>"><br>
                                <label class="control-label">Type</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_type;?>">  <br>
                                <label class="control-label">IP</label><br>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->ip_address;?>"><br>
                                <label class="control-label">Port</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->port_number;?>"><br>
                                <label class="control-label">S/N</label><br>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->serial_number;?>"><br>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-md-5 device-box " style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="col-md-4">
                                <img src="<?php echo base_url("img/device/weber-print-apply.jpg")?>" width="80" height="80">
<!--                                <label style="font-size:9px;display: none;">CONNECTED</label><span class="fa fa-circle" style="color: #00CC00;display: none; "></span>-->
<!--                                <label style="font-size: 9px;">NOT CONNECT</label><span class="fa fa-circle" style="color:red;"></span>-->
                            </div>
                            <div class="col-md-8 device-font"  >
                                <?php foreach ($data_table2->result() as $row) {?>
                                <label class="control-label">Name</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_names;?>"><br>
                                <label class="control-label">Type</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_type;?>">  <br>
                                <label class="control-label">IP</label><br>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->ip_address;?>" ><br>
                                <label class="control-label">Port</label>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->port_number;?>"><br>
                                <label class="control-label">S/N</label><br>
                                <input type="text"  readonly="readonly" placeholder="<?php echo $row->serial_number;?>" ><br>
                           <?php }?>
                            </div>
                        </div>

                        <div class="col-md-5 device-box " style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="col-md-4">
                                <img src="<?php echo base_url("img/device/teledyne-camera.jpg")?>" width="80" height="80">
<!--                                <label style="font-size:9px;display: none;">CONNECTED</label><span class="fa fa-circle" style="color: #00CC00;display: none; "></span>-->
<!--                                <label style="font-size: 9px;">NOT CONNECT</label><span class="fa fa-circle" style="color:red;"></span>-->
                            </div>
                            <div class="col-md-8 device-font"  >
                                <?php foreach ($data_table3->result() as $row) {?>
                                <label class="control-label">Name</label>
                                    <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_names;?>"><br>
                                    <label class="control-label">Type</label>
                                    <input type="text"  readonly="readonly" placeholder="<?php echo $row->device_type;?>">  <br>
                                    <label class="control-label">IP</label><br>
                                    <input type="text"  readonly="readonly" placeholder="<?php echo $row->ip_address;?>" ><br>
                                    <label class="control-label">Port</label>
                                    <input type="text"  readonly="readonly" placeholder="<?php echo $row->port_number;?>"><br>
                                    <label class="control-label">S/N</label><br>
                                    <input type="text"  readonly="readonly" placeholder="<?php echo $row->serial_number;?>" ><br>
                                <?php }?>
                            </div>
                        </div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="backup-tab">
                   <div class="col-md-12">
                       <div class="col-md-5 device-box " style="margin-top: 5px;margin-bottom: 5px;">
                           <button class="btn btn-primary button-backup" style="margin-top: 1em;margin-left: 6em;">FULL BACKUP</button>
                           <br>
                           <label style="margin-left: 4em;"> Last Full Backup: dd/mm/yy </label>
                       </div>
                           <div class="col-md-5 device-box " style="margin-top: 5px;margin-bottom: 5px;">
                               <button class="btn btn-primary button-backup" style="margin-top: 1em;margin-left: 3.3em;width: 16em">INCREMENTAL BACKUP</button>
                               <br>
                               <label style="margin-left: 3em;"> Last Incremental Backup: dd/mm/yy</label>
                           </div>
                   </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">

                    <div class="col-md-12">
                        <div class="col-md-2"
                            <label>First Name <span class="required">*</span></label>
                        </div>
                        <div class="col-md-5">
                            <input type="text"  required="required" style="width: 20em" value="name" readonly >
                        </div>
                    </div>

                     <div class="col-md-12" style="margin-top: 1em">
                        <div class="col-md-2"
                            <label>Role <span class="required">*</span></label>
                        </div>
                        <div class="col-md-5">
                            <input type="text"  required="required" style="width: 20em"  value="Role" readonly>
                        </div>
                      </div>

                     <div class="col-md-12" style="margin-top: 1em">
                        <div class="col-md-2"
                        <label>Division <span class="required">*</span></label>
                        </div>
                        <div class="col-md-5">
                            <input type="text"  required="required" style="width: 20em" value="Division" readonly>
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 1em">
                        <div class="col-md-2"
                        <label>Contact <span class="required">*</span></label>
                        </div>
                        <div class="col-md-5">
                            <input type="text"  required="required" style="width: 20em" value="contact" readonly >
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 1em">
                        <div class="col-md-2"
                        <label>Password <span class="required">*</span></label>
                    </div>
                    <div class="col-md-5">
                        <button class="btn btn-primary" required="required" style="width: 15em;color: #FFFFFF;" > Change password</button>
                    </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Body Overview-->




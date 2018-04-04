
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Risa Aprilia-->
<!-- * Date: 11/22/2017-->
<!-- * Time: 4:59 PM-->
<!-- */-->

<!--Report Tittle-->
<div class="col-md-12 tittle_box">
    <div class="col-md-8">
        <h5 style="font-family: 'Arial Black'">REPORT</h5>
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
<!--/Report Tittle-->

<div style="margin-top: 3.5em"></div>
<!--Body Overview-->
<div class="col-md-12 body_box" >
    <div class="wrap">
        <form method="post">
        <div class="col-md-12">
            <label style="margin-top: 2em" >JOB</label>
            <select  class="form-control" name="Job_id[]"style="width: 100%" required >
                    <?php foreach ($job_list->result() as $row){?>
                    <option value="<?php echo $row->job_id; ?>"><?php echo $row->job_id ?> - <?php echo $row->job_name?></option>
                    <?php }?>
            </select>

        </div>
        <div class="col-md-12">
            <label style="margin-top: 1em">STATUS</label>
            <select  class="form-control" name="Status[]" required >
                <option value="0">All</option>
                <option value="1">Printed</option>
                <option value="2">Verify</option>
                <option value="3">Others..</option>
            </select>

            <input type="submit" name="view" id="button_view" value="View" class="btn btn-primary" style="float: right;">
        </div>
        </form>
        <div class="col-md-12">
            <table id="tableView" class="table table-striped nowrap" cellspacing="0" width="97%"   >
                <thead><tr>
                    <th style="font-size: 14px;" >Code</th>
                    <th style="font-size: 14px;">Print Date</th>
                    <th style="font-size: 14px;">Verify Date</th>
                    <th style="font-size: 14px;">Status</th>
                </tr></thead>
                <tbody>

                <?php if($data_table === 1){

                foreach ($table_view->result() as $row){?>
                <tr>
                    <td style="font-size: 14px;"><?php echo $row->JobID;?></td>
                    <td style="font-size: 14px;"><?php echo $row->CreatedDateTime;?></td>
                    <td style="font-size: 14px;"><?php echo $row->UpdatedDateTime;?></td>
                    <td style="font-size: 14px;"><?php echo $row->Status;?></td>
                </tr>
                <?php }} ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!--/Body Overview-->

<?php
if(isset($_POST['view'])){
    foreach ($_POST['Job_id'] as $select)
        foreach ($_POST ['Status'] as $status)
            redirect('Report/view_job/'.$select.'/'.$status.'');
}?>

<script>
    $(document).ready(function() {
        $('#tableView').DataTable( {
            "searching": false,
            "paging": true,
            "info": false,
            "lengthChange":false,
            "pageLength": 5,
//button csv, pdf
            dom: 'Bfrtip',
            buttons: [
                'csv', 'pdf'
            ]
        } );
    } );
</script>

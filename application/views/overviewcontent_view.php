<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: Risa Aprilia-->
<!--* Date: 11/22/2017-->
<!--* Time: 10:43 AM-->
<!--*/-->

<!--Overview Tittle-->
<div class="col-md-12 tittle_box">
    <div class="col-md-8">
        <h5 style="font-family: 'Arial Black'"> OVERVIEW</h5>
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
<!--/Overview Tittle-->

<div style="margin-top: 3em"></div>
<!--Body Overview-->
<div class="row">
<div class="col-md-12 body_box" >
    <div class="col-md-12 wrap">
            </center>
            <button class="btn btn-success" style="float: right;margin-top: 5px" onclick="add_job()"><i class="glyphicon glyphicon-plus"></i> Create Job</button>
            <br />
            <br />
            <table id="table_id" class="table table-striped table-responsive" cellspacing="0" width="97%" style="font-size:13px;">
                <thead >
                <tr >
                    <th style="font-size: 14px;">Created Date</th>
                    <th style="font-size: 14px;">Job Name</th>
                    <th style="width:125px;font-size:14px;">Action
                        </p></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data_table->result() as $row){?>
                    <tr>
                        <td><?php echo $row->create_date;?></td>
                        <td><?php echo $row->job_name;?></td>

                        <td>
                            <button class="btn btn-danger" name="userid"><a href="<?php echo site_url('Overview/update_data/'.$row->job_id.''); ?>"><i class="glyphicon glyphicon-remove" tittle="delete"></i></button>
                            <button class="btn btn-warning" onclick="delete_job(<?php echo $row->job_id;?>)"><i class="glyphicon glyphicon-trash" tittle="purge"></i></button>

                        </td>
                    </tr>
                <?php }?>
                </tbody>

            </table>


    </div>
</div>
</div>

        <script type="text/javascript">
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
            var save_method; //for save method string
            var table;


            function add_job()
            {
                save_method = 'add';
                $('#form')[0].reset(); // reset form on modals
                $('#modal_form').modal('show'); // show bootstrap modal
                //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
            }

            function purge_job(id)
            {
                save_method = 'update';
                $('#form')[0].reset(); // reset form on modals

                //Ajax Load data from ajax
                $.ajax({
                    url : "<?php echo base_url('index.php/Overview/ajax_edit')?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {

                        $('[name="job_id"]').val(data.job_id);
                        $('[name="job_name"]').val(data.job_name);
//                        $('[name="job_desc"]').val(data.job_desc);

                        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                        $('.modal-title').text('Edit Job'); // Set title to Bootstrap modal title

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });
            }

            function save()
            {
                var url;
                if(save_method == 'add')
                {
                    url = "<?php echo base_url('index.php/Overview/create_job')?>";
                }
                else if(save_method == 'update')
                {
                    url = "<?php echo base_url('index.php/Overview/update_job')?>";
                }

                // ajax adding data to database
                $.ajax({
                    url : url,
                    type: "POST",
                    data: $('#form').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        //if success close modal and reload ajax table
                        $('#modal_form').modal('hide');
                        location.reload();// for reload a page
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }

            function delete_job(id)
            {
                if(confirm('Are you sure Purge this data? Selected data will be lost'))
                {
                    // ajax delete data from database
                    $.ajax({
                        url : "<?php echo base_url('index.php/Overview/delete_job')?>/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            location.reload();
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error purging data');
                        }
                    });

                }
            }

        </script>

        <script>
            $(document).ready( function() {
                $('table_id').dataTable( {
                    "iDisplayLength": 5,
                } );
            } )
        </script>

        <!-- Bootstrap modal -->
        <div class="modal fade" id="modal_form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Create New Job</h3>
                    </div>
                    <div class="modal-body form">
                        <form action="#" id="form" class="form-horizontal">
                            <input type="hidden" value="" name="job_id"/>
                            <div class="form-body">

                                <div class="form-group">
                                    <label class="control-label col-md-3">Job Name</label>
                                    <div class="col-md-9">
                                        <input name="job_name" placeholder="Job Name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Job Description</label>
                                    <div class="col-md-9">
                                        <textarea name="job_desc" placeholder="Job Description" class="form-control" type="text" style="text-align: left">
                                        </textarea>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->








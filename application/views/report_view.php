
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
        <label style="font-family: 'Arial';font-style: inherit;color: #FFFFFF""><?php echo  $this->session->userdata('username');?></label>
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
        <div class="col-md-12">
            <label style="margin-top: 2em" >JOB</label>
            <select  class="form-control" style="width: 100%" required >
                    <?php foreach ($job_list->result() as $row){?>
                    <option value="<?php echo $row -> job_id; ?>"><?php echo $row->job_name?></option>
                    <?php }?>
            </select>

        </div>
        <div class="col-md-12">
            <label style="margin-top: 1em">STATUS</label>
            <select  class="form-control" required >
                <option value="">Choose..</option>
                <option value="press">Press</option>
                <option value="net">Internet</option>
                <option value="mouth">Word of mouth</option>
            </select>

            <button style="float: right;" class="btn btn-primary">View</button>
        </div>

        <div class="col-md-12">
            <textarea class="report"  readonly>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusantium commodi corporis, delectus dicta doloremque error excepturi impedit incidunt ipsa modi neque nesciunt officiis pariatur quam, ratione sunt vero voluptatum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolor fugit iusto libero ratione repellat veniam vitae voluptas? Beatae deserunt dicta dignissimos doloremque minus modi obcaecati rem repellendus rerum velit.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto esse est eveniet exercitationem ipsam itaque, labore magnam nemo neque, nihil omnis perspiciatis placeat quam, quo? Consequatur distinctio molestiae velit?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi labore magni mollitia quae quidem voluptatibus. A, aperiam autem itaque maxime nulla, perspiciatis provident quasi, quod sunt vel voluptas voluptate.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae blanditiis culpa dolores dolorum ex facilis, magni, odit perferendis rerum saepe sequi tempore veritatis. Ab deserunt ducimus ea repudiandae voluptatibus?
            </textarea>
        </div>



    </div>
</div>
<!--/Body Overview-->
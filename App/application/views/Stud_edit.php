<div class="container bg-3">    
  <h3 class="margin">Students
  <a href="<?php echo site_url('/stud/');?>" class="btn btn-primary pull-right">Back</a>
  </h3>
  <div class="row">
    <div class="col-sm-12">  
      <?php 
            echo form_open('Stud_controller/update_student'); 
            echo form_hidden('old_roll_no',$old_roll_no); 
            echo form_label('Roll No.'); 
            echo form_input(array('id'=>'roll_no','name'=>'roll_no','value'=>$records[0]->roll_no)); 
            echo "";
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name)); 
            echo ""; 
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
</div>
  </div>
</div>
<div class="container bg-3">    
  <h3 class="margin">Students
  <a href="<?php echo site_url('/stud/');?>" class="btn btn-primary pull-right">Back</a>
  </h3>
  <div class="row">
    <div class="col-sm-12">  
    <?php echo validation_errors(); ?>
         <?php 
            echo form_open('Stud_controller/add_student');
            echo form_label('Roll No.'); 
            echo form_input(array('id'=>'roll_no','name'=>'roll_no')); 
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
  </div>
  </div>
</div>
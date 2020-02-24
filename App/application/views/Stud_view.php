<div class="container bg-3">    
  <h3 class="margin">Students
  <a href="<?php echo site_url('/stud/add_view');?>" class="btn btn-primary pull-right">Add</a>
  </h3>
  <div class="row">
    <div class="col-sm-12"> 
    <table class="table table-hover"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>SrNo.</td>"; 
            echo "<td>Roll No.</td>"; 
            echo "<td>Name</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->roll_no."</td>"; 
               echo "<td>".$r->name."</td>"; 
               echo "<td><a href = '".site_url('stud/edit/'.$r->roll_no)."'>Edit</a></td>"; 
               echo "<td><a href = '".site_url('stud/delete/'.$r->roll_no)."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
    </div>
  </div>
</div>
      
            
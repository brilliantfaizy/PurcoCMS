<?php $this->load->view('header'); ?>
<div id="content">

 <div id="innerMenu">

         <?php $this->load->view('employees/EmployeeTabs'); ?>

    </div>

 <div id="innerTabs">
        
        
                <?php $this->load->view('employees/employeeinner'); ?>
                
                
     </div>


    <div class="Grid">
      
        <table cellspacing="0" cellpadding="10">

            <tr>
			<th>User Id</th>
                <th>First Name</th>
				 <th>Middle Name</th>
                <th>Last Name</th>
				<th>Login Name</th>
                <th>Email Address</th>
				
                <th>Creation date</th>
                <th>Date Modified</th>
                <th>Status</th>
                <th>Action</th>
               
            </tr>
  <?php 
			foreach($single_student2 as $row){
		?>
            <tr>
				<td><?php echo $row->Emp_Id ?></td>
                <td><?php echo $row->Firstname ?></td>
                <td><?php echo $row->Middlename ?></td>
                <td><?php echo $row->Lastname ?></td>
                <td><?php echo $row->Username ?></td>
                <td><?php echo $row->Email ?></td>
                <td><?php echo $row->CreationDate ?></td>
                <td><?php echo $row->DateModified ?></td>
				 <?php if($row->Status == 1) { ?>

                <td>
                    <?php echo "Active"; ?>
                </td>

                <?php } else { ?>

                <td>
                    <?php echo "Inactive"; ?>
                </td>

                <?php } ?>
              <td><a href="<?php echo $base; ?>/index.php/EmployeeController/editemployee/<?php echo $row->Emp_Id ?>">Edit</a></td>
            </tr>

           <?php }?>
           

           

        </table>
		
    </div>

</div>

<?php $this->load->view('footer'); ?>
<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'),
   array('first_name' => 'Felix', 'last_name' => 'Hernandez'),
   array('first_name' => 'Welington', 'last_name' => 'Castillo'), 
   array('first_name' => 'Willie', 'last_name' => 'Bloomquist'), 
   array('first_name' => 'Chris', 'last_name' => 'Taylor'),
   array('first_name' => 'Kyle', 'last_name' => 'Seager'), 
   array('first_name' => 'Brad', 'last_name' => 'Miller'), 
   array('first_name' => 'Robinson', 'last_name' => 'Cano'), 
   array('first_name' => 'Dustin', 'last_name' => 'Ackley'), 
   array('first_name' => 'Nelson', 'last_name' => 'Cruz'), 
   array('first_name' => 'Rickie', 'last_name' => 'Weeks')  

);
?>
<style>
  table 
  {
    border-collapse: collapse;
  }
  .highlight
  {
    color: white;
    background-color: black;
  }
  td, th
  {
    padding: 4px;
  }
  th 
  {
    font-size: 1.15em;
  }
</style>
<!-- with for loops -->
<table border =1>
	<tr>
	  <th>User #</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Full Name</th>
    <th>Full Name in upper case</th>
    <th>Length of full name <small>(without spaces) </small></th>
	</tr>

<?php for($i=0; $i<count($users); $i++)
      {
        if (($i+1)%5 == 0) 
        { ?>
    	    <tr class="highlight">
<?php   }
        else
        {?>
          <tr>  
<?php   }?>                  
        	  <th><?= $i+1 ?></th>
            <td><?= $users[$i]['first_name'] ?></td>
            <td><?= $users[$i]['last_name'] ?></td>
            <td><?= implode(' ',$users[$i]) ?></td>
            <td><?= strtoupper(implode(' ', $users[$i])) ?></td>
            <td><?= strlen((implode($users[$i]))) ?></td>
          </tr>
<?php }?>


</table>
<br><br><br>
<!-- with foreach -->
<table border =1>
  <tr>
    <th>User #</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Full Name</th>
    <th>Full Name in upper case</th>
    <th>Length of full name <small>(without spaces) </small></th>
  </tr>

<?php 
      $j = 1;
      foreach($users as $user)
      { 
        if($j%5==0)
        { ?>
          <tr class ="highlight">
<?php   }
        else 
        { ?>
          <tr>
<?php   }?>             
            <th><?= $j ?></th>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['last_name'] ?></td>
            <td><?= implode(' ',$user) ?></td>
            <td><?= strtoupper(implode(' ', $user)) ?></td>
            <td><?= strlen((implode($user))) ?></td>
          </tr>
<?php   $j++;
      } ?>
</table>
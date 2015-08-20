<style>
  table 
  {
    border-collapse: collapse;
  }
  tr:nth-child(odd)
  {
    background-color: #B8B8B8;
  }
  th
  {
    font-size: 1.1em;
  }
  td
  {
    width: 25px;
    height: 25px;
    text-align: center;
  }
</style>
<table border = 1>
	<tr>
	  <td></td>
<?php for($i=1;$i<=9; $i++)
	  { ?>
	  <th><?= $i ?></th>
<?php }?>	
	</tr>
<?php for($i=1; $i<=9; $i++)
      { ?>		
  	  <tr>
      	<th><?= $i ?></th>
<?php   for($j=1; $j<=9; $j++)
        { ?>
          <td><?= $i * $j ?></td>
<?php   } ?>
      </tr>
<?php } ?>
</table>
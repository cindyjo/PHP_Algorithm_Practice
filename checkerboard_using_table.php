<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Checkerboard</title>
  <style>
  *
  {
    margin: 0px auto;
  }
  .block
  {
    width: 50px;
    height: 50px;
    display: inline-block;
    margin-right: -4px;
    vertical-align: top;
  }
  table
  {
    border: 1px solid black;
  }
  </style>
</head>
<body>
<?php
function checkerboard($color1, $color2)
{?>
  <table cellspacing = '0'>
<?php for($i=1; $i<=8; $i++)
        { ?>
        <tr>
<?php     for($j=1; $j<=4; $j++)
          { 
            if($i % 2 ==1)
            {?>
              <td class = "block" style = "background-color:<?php echo$color1; ?>"></td>
              <td class = "block" style = "background-color:<?php echo$color2; ?>"></td>
<?php       } 
            else
            {?>
              <td class = "block" style = "background-color:<?php echo$color2; ?>"></td> 
              <td class = "block" style = "background-color:<?php echo$color1; ?>"></td>
<?php       } 
          }?>
        </tr>
<?php   } ?>
  </table>
<?php
}
checkerboard("red", "black");
echo '<br><br><br>';
checkerboard("#FFFFCC","#003300")
?>
</body>
</html>









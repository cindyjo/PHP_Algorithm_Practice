<?php
session_start();
echo session_id();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  *
  {
    margin: 0px auto;
    padding: 0px;
  }
  .block
  {
    width: 50px;
    height: 50px;
    display: inline-block;
    margin-right: -4px;
    vertical-align: top;
  }

  #box
  {
    width: 400px;
    border: 1px solid;
  }
  </style>
</head>
<body>
<?php
function checkerboard($color1, $color2)
{?>
  <div id = "box">
<?php   for($i=1; $i<=8; $i++)
        { 
          for($j=1; $j<=4; $j++)
          { 
            if($i % 2 ==1)
            {?>
              <div class = "block" style="background-color: <?php echo$color1;?>"></div>
              <div class = "block" style="background-color: <?php echo$color2;?>"></div>      
<?php       } 
            else
            {?>
              <div class = "block" style="background-color: <?php echo$color2;?>"></div>
              <div class = "block" style="background-color: <?php echo$color1;?>"></div>
<?php      } 
          }
        } ?>
  </div>
<?php
}
checkerboard("red", "black");
echo '<br><br><br>';
checkerboard("#FFFFCC", "#003300");
?>
</body>
</html>



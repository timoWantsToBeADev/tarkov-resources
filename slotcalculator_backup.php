<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tarkov Resources</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>
  <?php include('items.php');?>
  
    <p class="topText">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam at ex repellat amet eveniet porro. Cumque hic, accusamus vitae quo non necessitatibus nihil, ea nulla, facilis recusandae nostrum reprehenderit omnis possimus at quas dolore id a quod animi? Amet nostrum qui, accusantium rerum cupiditate exercitationem repudiandae deserunt molestias unde explicabo!</p>

    <div id="toolbox">
      <h1 id="toolTitle">Price per slot efficiency</h1>
      
     
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
      <label for="item">item</label>
      <select name="item" id="item">
  <?php 
    if (isset($_POST["item"])) {
      $selectedItem = htmlspecialchars($_POST["item"]);
    }else {
      $selectedItem = "";
    }
    

    foreach ($items as $key => $item) {
     if ($key == $selectedItem) {
     echo '<option selected value="' . $key . '">' . $item['name'] . '</option>';
    } else {
      echo '<option value="' . $key . '">' . $item['name'] . '</option>';
    }

    } ?>
       
    
    
      </select>
      <button type="submit">Calculate!</button>
    </form>
    <div>
          <!-- <p class="selected-item"><?php echo $selectedItem; ?></p> -->
          <p class="selected-item">
           <?php  
            
            
            

          foreach ($items as $key => $item) {

            
            // var_dump ('<p>Ik vergelijk: ' . strtolower($key['name']) . ' met ' .$selectedItem. '</p>');
           if (strtolower($key) == strtolower($selectedItem)) {
            ?> <p class="itemName"> <?php echo $item['name'];?> </p>
            <p class="slotPrice"> <?php  echo round($item['price'] / $item['slots']);?> </p> <?php
            
           }
           
          }
           
           ?>


</p>
          

    </div>
  
  
  
  </div>
    
    <a href="index.php">
    <div style="float: right; margin-right: 7.5%; width: 100px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><p class="footer">Tarkov<strong>Resources.com</strong></p></div>
    </a>
  </body>
</html>

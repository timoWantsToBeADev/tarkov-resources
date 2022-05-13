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
  
    <p class="topText">
There are many different types of items in Escape From Tarkov, but have You ever wondered which ones are actually worth looting? This tool breaks out all the EFT provisions and sorts them from highest value to lowest value per slot, so now you know what to loot.</p>

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

            // echo "<span class='name'>" . $ip['cityName'] . "</span>";
            // var_dump ('<p>Ik vergelijk: ' . strtolower($key['name']) . ' met ' .$selectedItem. '</p>');
           if (strtolower($key) == strtolower($selectedItem)) {
            ?> <p id="itemName"> <?php echo $item['name'];?> </p> <?php
           
           if(round($item['price'] / $item['slots']) > 10000) {
             ?><p id="slotPriceGood"> <?php  echo round($item['price'] / $item['slots']);?> <span id="perSlot">per slot</span> </p> <?php
             echo '<p id="descriptionGood"> This item is slot efficient, definitely pick this up! </p>';
        } else {
          ?><p id="slotPriceBad"> <?php  echo round($item['price'] / $item['slots']);?> <span id="perSlot">per slot</span> </p> <?php
          echo '<p id="descriptionBad"> This item is not slot efficient, only pick this up if you have nothing else to loot. </p>';
        }
           
           }
           
          }
            if ($selectedItem == '') {
              echo '<p id="descriptionBad">Select an item from the list and click calculate</p>';
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

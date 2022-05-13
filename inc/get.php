
<?php include('items.php'); ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label for="item">item:</label>
        <select name="item" id="item">
        
        <?php 
    foreach ($items as $key => $item) {?>
      <option value="<?php echo $key ?>"><?php echo $item['name'] ?></option> <?php } ?>
            <!-- <option value="paracord" >Paracord</option>
            <option value="altyn-faceshield">Altyn Faceshield</option>
            <option value="bronze-lion">Bronze lion</option>
            <option value="ak-101-556x45-assault-rifle">AK-101 55.6x45 assault rifle</option>
            <option value="as-val-9x39-special-assault-rifle">AS VAL 9x39 special assault rifle</option>
            <option value="propane-tank">5L Propane tank</option>
            <option value="shustrilo-sealing-foam">Shustrilo sealing foam</option>
            <option value="gas-mask-air-filter">Gas mask air filter</option>
            <option value="mp-133-12ga-710mm-barrel">MP-133 12ga 710mm barrel</option>
            <option value="elcan-specterdr-1x/4x-scope">ELCAN SpecterDR 1x/4x Scope</option>
            <option value="wartech-tv-110-plate-carrier-rig">WARTECH TV-110 plate carrier rig</option>
            <option value="lbt-6094a-slick-plate-carrier">LBT-6094A Slick Plate Carrier</option> -->
        </select>
    </div>
    <div>
        <button type="submit">Select</button>
    </div>
</form>
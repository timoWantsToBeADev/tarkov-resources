<?php

$item = filter_input(INPUT_GET, 'item', FILTER_UNSAFE_RAW);

?>

<?php if ($item) : ?>
    <p>You selected <span style="item:<?php echo $item ?>"><?php echo $item ?></span></p>
    <p><a href="index.php">Back to the form</a></p>
<?php else : ?>
    <p>You did not select any item</p>
<?php endif ?>
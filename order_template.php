<?php
    $recipient = "Ted";
    $downtown_address = "210 SW 5th Ave #105, Portland OR 97209";
    $downtown_order = "420 cups";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Order Form</title>
    </head>
    <body>
        <p>Hi <?php echo $recipient ?>,</p>
        <p>Just making a weekly order.  See details below:</p>
        <p><?php echo $downtown_order; ?></p>
        <p><?php echo $downtown_address; ?></p>
    </body>
</html>

<?php
    $con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');

    $itemToDelete = $_GET['id'];
    
    $sql = "DELETE FROM `tbl_menuItems` WHERE `id`=" . $itemToDelete;
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        Header("Location: createMenu.php?tableName=tb_menuItems");
        exit;
    } else {
        echo "Unsuccessful";
    }
?>

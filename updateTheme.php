<?php
$id = $_POST['id'];
$color = $_POST['color'];
$comp = $_POST['comp'];
$mono = $_POST['mono'];
$fontFamily = $_POST['fontFamily'];

header("Location: editTheme.php?id=" . $id . "&color=%23" . substr($color, -6) . "&comp=%23" . substr($comp, -6) . "&mono=%23" . substr($mono, -6) . "&fontFamily=" . $fontFamily);
exit;
?>

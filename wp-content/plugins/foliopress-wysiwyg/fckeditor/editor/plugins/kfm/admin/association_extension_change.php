<?php
require_once('initialise.php');
if(!isset($_POST['aid']) || !isset($_POST['extension']))die('error("Post values are missing");');
$kfm->db->query('UPDATE '.KFM_DB_PREFIX.'plugin_extensions SET extension="'.$_POST['extension'].'" WHERE id='.$_POST['aid']);
?>
message("association changed.");

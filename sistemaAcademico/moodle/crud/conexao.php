<?php
     require_once("../config.php");
     $sql="SELECT COUNT(id) AS cont FROM  {$CFG->prefix}user ";
     $usr=get_record_sql($sql);
     echo $usr->cont;
?>
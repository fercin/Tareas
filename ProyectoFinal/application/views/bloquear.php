<?php 
$CI =& get_instance();
$sql = "update usuarios set estado='no' where id='$codigo'";
$CI->db->query($sql);
redirect('admin');

 ?>
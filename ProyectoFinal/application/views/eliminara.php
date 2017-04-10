<?php 

$CI =& get_instance();
$sql = "delete from usuarios where id='$codigo'";
$CI->db->query($sql);
redirect('admin');
 ?>
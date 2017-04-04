<?php 

$CI =& get_instance();
$sql = "delete from anuncios where id='$cod'";
$CI->db->query($sql);
redirect('cuenta');
 ?>
<?php function dataxnam_base(){  $iba = new mysqli("127.0.0.1", "root","" ,"wepro" );  if (!$iba)  throw new Exception("Error...");  else  return $iba;  }  $base_url = "http://example.com";  $plugin_url = "http://example.com";  $table_prefix = "wp_";  ?> 
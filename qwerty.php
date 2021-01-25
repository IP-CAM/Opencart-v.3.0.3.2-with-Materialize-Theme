<head><meta charset="utf-8" /></head>
<style>td{border:1px solid black;}</style>
<?php
header('Content-Type: text/html; charset=utf-8');
require_once('config.php');
define('DB_DATABASE', 'kommpas_db');
define('DB_USERNAME', 'kommpas_db');
define('DB_PASSWORD', '6JPG6fRb');
define('DB_HOSTNAME', 'kommpas.mysql.tools');


// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Registry
$registry = new Registry();
// Config
$config = new Config();
$config->load('default');
//$config->load($application_config);
$registry->set('config', $config);



// Database
echo DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE;
	

  $mysqli = mysqli_connect("kommpas.mysql.tools", "kommpas_db", "6JPG6fRb", "kommpas_db");
  $mysqli->set_charset("utf8");
  $sql = "SELECT * FROM `komhe_virtuemart_product_customfields` WHERE komhe_virtuemart_product_customfields.virtuemart_custom_id = 8 ORDER BY `virtuemart_product_id` ASC";
  $result = mysqli_query($mysqli,$sql);
  while ($row = $result->fetch_assoc()) {
    echo $row['virtuemart_product_id'];
    echo  mb_convert_encoding($row['customfield_value'],'UTF-8')."\n";
  }
  
  //$result = $mysqli->query("SELECT  *  FROM komhe_virtuemart_product_customfields WHERE komhe_virtuemart_product_customfields.virtuemart_custom_id=8  ORDER BY komhe_virtuemart_product_customfields.virtuemart_product_id ASC");
    var_dump($result);

  //$mysqli->close();

//	$registry->set('db', new DB($config->get('db_engine'), $config->get('db_hostname'), $config->get('db_username'), $config->get('db_password'), $config->get('db_database'), $config->get('db_port')));


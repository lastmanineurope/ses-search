<?php
// config

//fill in the Goog Fusion Tables key
define(GF_API_KEY, 'AIzaSyDfRWA22BugGJsRvwIbFKb7I9ud5bskfzQ');
// fill in the Google Fusion Tables table name
define(GF_API_TABLE, '1512UclVxllMSeDvejZAsGTNMhwn1q3dVwvIEcKDv');

// do not touch below unless you know what you're doing :)
include_once('FusionTablesSSP.class.php');

header("Access-Control-Allow-Origin: *");

$ssp = new FusionTablesSSP(GF_API_TABLE, GF_API_KEY);
echo json_encode($ssp->execute($_GET));
<?
if (strpos($_SERVER["SCRIPT_NAME"],basename(__FILE__)) !== false)
{
	Header("location: index.php");
}

include_once('DAL.php');
require_once('commonObject.php');

	$host="mysql-server";
	$user="root";
	$pass="*********";
	$database="clsmsa";


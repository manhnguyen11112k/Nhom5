<?php
	require('Models/csdl.php');
	$db = new CSDL;
	$db->ketnoi();

	/*Xử lý các request*/


	$db->dongketnoi();
 ?>
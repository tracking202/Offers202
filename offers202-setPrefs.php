<? include_once('offers202-config.php'); 

//if changing the limit, only change the limit
if ($_POST['limit']) { 
	$_SESSION['offers202_limit'] = $_POST['limit'];
} else { 
	//set the preferences
	$_SESSION['offers202_query'] = $_POST['query'];
	$_SESSION['offers202_network_id'] = $_POST['networkId'];
}

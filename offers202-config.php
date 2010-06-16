<?

//put your api key here
//you can get your api key by going to http://developers.tracking202.com/
$api_key = 'pasteYourApiKeyHere';

DEFINE('TRACKING202_API_KEY', $api_key);
DEFINE('TRACKING202_API_URL', 'https://api.tracking202.com');

//include the functions
include_once('offers202-apiFunctions.php');
include_once('offers202-xmlToArrayClass.php');
include_once('offers202-curlClass.php');

session_start();

?>
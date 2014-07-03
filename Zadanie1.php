<?php 

$path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/Smarty/Smarty.class.php";

$smarty = new Smarty();

/*
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
*/

$smarty->template_dir = "$path/temp/smarty/templates";
$smarty->compile_dir  = "$path/temp/smarty/templates_c";
$smarty->cache_dir    = "$path/temp/smarty/cache";
$smarty->config_dir   = "$path/temp/smarty/configs";

$db_server = mysqli_connect('localhost','arch','q1w2e3r4','publications');
if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());


if (isset($_POST['mail']))
	
{
	$mail = get_post('mail');
	$x    = rand(0, 1024);
	$y 	  = rand(0, 486);

	
		$query = "INSERT INTO mails VALUES ('', '$mail', '$x', '$y')";

		if (!mysqli_query($db_server, $query))
		{
		echo "Сбой при вставке: <br>" .
		mysqli_error() . "<p>";
		}

	
}

$query = "SELECT * FROM mails";

$result = mysqli_query($db_server, $query);

if (!$result) die ("Сбой при доступе к БД: " . mysqli_error());

$rows = mysqli_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
	$results[] = mysqli_fetch_array($result);
}

mysqli_close($db_server);

$smarty->assign('results',$results);  					// из примера смарти (работает)
//$smarty->assign('x',$x);								// не нужны ($results передаёт все параметры)
//$smarty->assign('y',$y);
$smarty->display('Zadanie1.tpl');


function get_post($var)
{
	//echo "post : ".$_POST[$var]; 							//  не обязатательно(проверка)
		echo mysqli_real_escape_string($_POST[$var]);
	//	echo "after : ".$_POST[$var]; 
	//	return mysqli_real_escape_string($_POST[$var]);		//	в примере
		return $_POST[$var];
}

?>
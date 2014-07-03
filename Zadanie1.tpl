<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">

      <title>SmartyTest</title>
 <script type="text/javascript" src="../js/jquery.js"></script>
 <script type="text/javascript" src="../js/Zadanie1.js"></script>

</head>
<body style="background-color:gray" text="#000080">

<form action="Zadanie1.php" method="post">
   <h1 style="text-align:center">
  E-mail <br />
  <input type="text" name="mail">


         <input type="submit" value="ADD RECORD">

</h1>
</form>
	
{section name=row loop=$results}

	 	 
<div id="{$results[row].No}" class="points" title="title" style="position: absolute; width: 15px; height: 15px; background-color: #00FF00; top: {$results[row].x}px; left: {$results[row].y}px;"></div>
	 
			 
{/section}


</body></html>



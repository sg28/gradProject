<?php
$fh = fopen("imdbCrime.txt","r");

while (!feof($fh)) {
	$current = trim(fgets($fh));
	$iArray[] = explode("*",$current);
}
$count = count($iArray);
	for($x=0;$x<$count;$x++){
		
		$newArray[$x]["imageTitle"] = $iArray[$x][0];
		$newArray[$x]["imageSrc"] = $iArray[$x][1];
		$newArray[$x]["title"] = $iArray[$x][2];
		$newArray[$x]["link"] = $iArray[$x][3];
		$newArray[$x]["outlinetext"] = $iArray[$x][4];
		$newArray[$x]["yeartype"] = $iArray[$x][5];

	}

// echo "<pre>";
// print_r($newArray);

?>
<!---HTML Codes 
* We are trying to print the scraped data in an html code output
*
*
*-->
		<html lang="en">
		<head><meta charset="UTF-8">
		<title>Crawl</title>

		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
			<body >

				<div class="container">

						
					<form align ="center" id="form">



				<!-- start of menu -->
						<table bgcolor="#A0D465" width="750" height="5" border="0" align="right" valign="middle" cellpadding="0" cellspacing="0" border="0" class="devicewidth">
							<tbody>
								<tr>
									<td height="50" align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #282828" st-content="menu">
					<a href="../zeb/index.php#" style="color: #ffffff;text-decoration: none;" class="menu_top">HOME</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/actionDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">ACTION</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/adventureDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">ADVENTURE</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/animationDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">ANIMATION</a>

&nbsp;&nbsp;&nbsp; 	<a href="../zeb/comedyDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">COMEDY</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/crimeDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">CRIME</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/familyDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">FAMILY</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/historyDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">HISTORY</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/horrorDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">HORROR</a>
&nbsp;&nbsp;&nbsp; 	<a href="../zeb/warDisplay.php" style="color: #ffffff;text-decoration: none;" class="menu_top">WAR</a>
			</td>
								</tr>
							</tbody>
						</table>
							
										
							<?php 
							
							foreach ($newArray as $new) {
								
								echo('<div class="movie">');
								echo('<a href="' . $new['link'] .'" ><h2>' . $new['title'] . '</h2 ></a>');
								echo('<h4>' . $new['yeartype'] . '</h4>');
								echo('<img src="' . $new['imageSrc'] .'" title="' .$new['imageTitle'] .'" alt="imdb movie image">');
								echo('<p><code>'.$new['outlinetext'].'</code></p>');

								
							}
							?>
						
				</form>
				</div>

			</body>	
		</html>
<!--Working on the Web Scrapping 
* We will be working on the simple web scrapping 
*Author -Snehashis Ghosh
-->
<?php
//require_once "scrapy2.php";
require_once "xpath.php";
set_time_limit(0);
$startUrl = "http://www.imdb.com/search/title?genres=action";


		/**Working of the XPaths of the required page Elements
		* Now to create the recursive function of the images and the links we have to get the XPaths of the images and the Titles

		* For anchor Text XPATH: 
			The complete XPATHS code for Finding the Text $("//td[@class='title']/a/text()")
		* For href Xpath
			The complete XPATHS code for Finding the Text $("//td[@class='title']/a/@href")

		*For image src Xpath
			The complete XPATHS code for Finding the Text $("//td[@class='image']//img/@src")

		*For image Title Xpath
			The complete XPATHS code for Finding the Text $("//td[@class='image']//img/@title")

		*For Top Most "Next Link" Xpath
			The complete XPATHS code for Finding the Text $x("(//span[@class='pagination']/a[contains(.,'Next')])[1]")	
		* For getting the year of production of the movie
		$x("//td[@class='title']/span[@class='year_type']")
		* For the Movie credit reviews
		$x("//td[@class='title']/span[@class='credit']")

		For the genre of the movie
		$x("//td[@class='title']/span[@class='genre']")
		**/
function scrape($url){
	$baseUrl  	= "http://www.imdb.com";
	$array 		= array();
	$xpath 		= new XPATH($url);

	$imageSrcQuery 		= $xpath->query("//td[@class='image']//img/@src");
	$imageTitleQuery 	= $xpath->query("//td[@class='image']//img/@title");
	$LinkTitleQuery 	= $xpath->query("//td[@class='title']/a/text()");
	$LinkHrefQuery 		= $xpath->query("//td[@class='title']/a/@href");
	$outline	 		= $xpath->query("//td[@class='title']/span[@class='outline']");
	$yeartype 			= $xpath->query("//td[@class='title']/span[@class='year_type']");
	


	$fh = fopen("imdbaction.txt","a+");

	for ($x=0; $x <$LinkHrefQuery->length ; $x++) { 
		
		$string =	$array[$x]['imageTitle'] 		= $imageTitleQuery	->item($x)->nodeValue."*";
		$string.=	$array[$x]	['imageSrc'] 		= $imageSrcQuery	->item($x)->nodeValue."*";
		$string.=	$array[$x]	['linkTitle'] 		= $LinkTitleQuery	->item($x)->nodeValue."*";
		$string.=	$array[$x]	['linkHref'] 		= $baseUrl . $LinkHrefQuery	->item($x)->nodeValue."*";
		$string.=	$array[$x]	['outlinetext'] 	= $outline	->item($x)->nodeValue."*";
		$string.=	$array[$x]	['yeartype'] 		= $yeartype	->item($x)->nodeValue."*";
		

		
		fwrite($fh, $string."\n");
	
		// $array[$x]['imageTitle'] 	= $imageTitleQuery	->item($x)->nodeValue;
		// $array[$x]['imageSrc'] 		= $imageSrcQuery	->item($x)->nodeValue;
		// $array[$x]['linkTitle`'] 	= $LinkTitleQuery	->item($x)->nodeValue;
		// $array[$x]['linkHref'] 		= $baseUrl . $LinkHrefQuery	->item($x)->nodeValue;

		
	}
fclose($fh);

//Checking if the next page link exists or not?------------
	$nextPageQuery = $xpath->query("(//span[@class='pagination']/a[contains(.,'Next')])[1]/@href");
	if($nextPageQuery->length){
		$nextUrl = $baseUrl . $nextPageQuery->item(0)->nodeValue;
		//$array = array_merge($array,scrape($nextUrl));
		scrape($nextUrl);
	}
	return $array;
}
$data = scrape("http://www.imdb.com/search/title?genres=action");

//echo"<pre>";
//print_r($data);
?>
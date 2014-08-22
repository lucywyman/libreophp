<?php
 
function getLevenshtein($word)
	{
	$words = array();
	for ($i = 0; $i < strlen($word); $i++) {
		$words[] = substr($word, 0, $i) . '_' . substr($word, $i);
		$words[] = substr($word, 0, $i) . substr($word, $i + 1);
		$words[] = substr($word, 0, $i) . '_' . substr($word, $i + 1);
		}
		$words[] = $word . '_';
		return $words;
	}

function search($items, $db){
	$resultlist = array();
	for($i = 0; $i < count($items); $i++){
		$searchquery = "SELECT * FROM LibreoBooks WHERE title LIKE '$item[i]' OR author LIKE '$item[i]'";
		$result = mysql_query($searchquery, $db);
		if ($result){
			$row = mysql_fetch_array($result);
			array_push($resultlist, $row);
		}
	}
	if(!empty($resultlist)){
		$_SESSION['searchresult'] = $resultlist;
	}
}

?>

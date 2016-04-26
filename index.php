<?php 
	/*
		Coded by João Artur (K3N1)
		KH-Crypt v1.0
	*/
	function khcrypt($word) {
		$letters=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$to=array("%01","%02","%03","%04","%05","%06","%07","%08","%09","%10","%11","%12","%13","%14","%15","%16","%17","%18","%19","%20","%21","%22","%23","%24","%25","%26","%27","%28","%29","%30","%31","%32","%33","%34","%35","%36","%37","%38","%39","%40","%41","%42","%43","%44","%45","%46","%47");
		return str_replace($letters,$to,$word);
	}

	function khdecrypt($hash) {
		$letters=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$to=array("%01","%02","%03","%04","%05","%06","%07","%08","%09","%10","%11","%12","%13","%14","%15","%16","%17","%18","%19","%20","%21","%22","%23","%24","%25","%26","%27","%28","%29","%30","%31","%32","%33","%34","%35","%36","%37","%38","%39","%40","%41","%42","%43","%44","%45","%46","%47");
		return str_replace($to,$letters,$hash);
	}
	/* Examples */
	echo "Crypt of <i>keni</i>: ". khcrypt("keni")."<br/>";
	echo "Decrypt of <i>%11%05%14%09</i>: ". khdecrypt("%11%05%14%09")."<br/>";
?>
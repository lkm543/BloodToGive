<?php 
//storageA 
//storageB
//storageAB
//storageO 
	set_time_limit(0);
	header("Content-Type:text/html; charset=utf-8");
	require_once('simple_html_dom.php');
	$link = mysqli_connect('localhost','client','1qaz2wsx','blood');
	mysqli_query("SET NAMES 'UTF8'");


	$url = "http://www.tp.blood.org.tw/Internet/taipei/LocationMap.aspx";
	$length = 60;
	$data = array();
	for ($i=1; $i < $length; $i++) { 
		$row = array();
		$response = cURL($url.'?spotID='.$i,'');
		$html = str_get_html($response);
		$res = $html -> find('div[id=CalendarContentMapInfo]',0) -> find('td');
		if (trim($res[2]->find('li',0)->plaintext)!="") {
			$temp = $res[0]->find('li');
			$id = array_combine(range(0, 3), array('address' , 'tel','openhour','note'));
			foreach ($temp as $key => $value) {
				$text = explode("：", $value->plaintext);
				
				array_push($row, utf8_encode($text[1]));
			}
			$row['name'] = utf8_encode(trim($res[2]->find('li',0)->plaintext));

			// $sql = "INSERT INTO `site` (`id`, `name`, `address`, `openhour`, `tel`, `note`)
										// VALUES (NULL, '".$row['name']."','$row[0]','$row[1]','$row[2]','$row[3]')";
			$result = mysqli_query($link,$sql);
			array_push($data, $row);
		}
			
	}
	

	
	

	

	echo "<pre>";
	print_r($data);
	echo "</pre>";
	// echo "$res";














	function cURL($url, $post)
	{
	    $header=NULL;
	    $cookie=NULL;
	    //$user_agent = $_SERVER['HTTP_USER_AGENT; 
	    $user_agent = 'Mozilla/5.0 (Windows NT 5.1; rv:10.0.2) Gecko/20100101 Firefox/10.0.2';
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_HEADER, $header);
	    curl_setopt($ch, CURLOPT_NOBODY, $header);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	    
	    // if ($post) {
	    //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    //     curl_setopt($ch, CURLOPT_POST, 1);
	    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	    // }
	    $result = curl_exec($ch);
	    $error = curl_error($ch);
	    curl_close($ch);
	    
	    if($result){
	        return $result;

	    }else{
	        return $error;
	    }
	}

?>
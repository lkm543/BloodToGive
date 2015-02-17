<?php 
//storageA 
//storageB
//storageAB
//storageO 
	require_once('simple_html_dom.php');
	$url = "http://www.blood.org.tw/Internet/main/index.aspx";
	$response = cURL($url,'');

	$html = str_get_html($response);
	$res = $html -> find('div[id=tool_blood_cube]',0)->find('div[class=Storage]');
	

	$data = array();
	foreach ($res as $key => $value) {
		
		$row = array();
		$row['region'] = $value-> find('div[id=StorageHeader]',0)->plaintext;
		$temp = $value-> find('div',1)->find('div');
		foreach ($temp as $key1 => $blood) {
			$id = $blood ->getAttribute('id');
			$type = $blood ->find('img',0)->getAttribute('alt');
			
			switch ($type) {
				case '庫存量7日以上':
					$row[$id] = 3;
					break;
				case '庫存量4到7日':
					$row[$id] = 2;
					break;
				case '庫存量4日以下':
					$row[$id] = 1;
					break;
				default:
					$row[$id] = 0;
					break;
			}
		}
		


		array_push($data, $row);
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
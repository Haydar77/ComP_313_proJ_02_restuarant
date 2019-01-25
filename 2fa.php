<?php
$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => 'youremail@yourdomain.com',
		'fromName' => 'Your Company Name',
		'apikey' => '7f3a8492-914f-48fa-89ef-d0337545fcd9',
		'subject' => 'Your Subject',
		'to' => 'kalam.ul.mazid@gmail.com;tyjitu@gmail.com',
		'bodyHtml' => '<h1>Html Body</h1>',
		'bodyText' => 'Text Body',
		'isTransactional' => false);
		
		$ch = curl_init();
		curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false
        ));
		
        $result=curl_exec ($ch);
        curl_close ($ch);
		
        echo $result;	
}
catch(Exception $ex){
	echo $ex->getMessage();
}
?>
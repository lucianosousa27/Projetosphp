<?php
$curl = curl_init('https://catalogo.centerb2b.com.br/busca/?fq=C:1000003/1000004/1000440');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);


$regex = '/<h3 class="shelf-product-name">(.*?)<\/h3>/s';
if ( preg_match($regex, $page, $list )
	for ($i=1; $i < 100; $i++) {

 echo $list[$i];

}
	


 
 else

print('not found')

?>
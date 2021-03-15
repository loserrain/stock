<?php
try{
 $stock=$_GET['stock'];
 //$str1 = '';
 //$str2 = '.tw';
 $url = 'https://mis.twse.com.tw/stock/api/getStockInfo.jsp?ex_ch='.$stock;

 $response = file_get_contents($url);

  $json_array=json_decode($response,true);

 
  //echo $json_array['msgArray']['0']['n'];
  
 function display_array_recursive($json_rec){
		if($json_rec){
			foreach($json_rec as $key=> $value){
				if(is_array($value)){
					display_array_recursive($value);
				}else{
					if(strcmp($key,'n') == 0){
						echo '公司簡稱:'.$value.'<br>';
					}else if(strcmp($key,'c')==0){
						echo '股票代號'.$value.'<br>';
					}
					echo $json_array ->n;
					echo "\n";
					echo $key.'--'.$value.'<br>';
					//var money = 1000
		
				}
				
			}
		
			
		}	
	}
	display_array_recursive($json_array);
}catch(Exception $e){
    echo $e->getMessage();
}
?>
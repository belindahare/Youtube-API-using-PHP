<?php 
    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');

    // $url = 'http://gdata.youtube.com/feeds/api/users/violetdailypill?v=2&alt=json';
    $string = file_get_contents($url);
    $arrOne = json_decode($string, true);
    $yesterdaysDate = date('m-d-Y',strtotime("-1 days"));
	echo $yesterdaysDate;
    $arrTwo = $arrOne['entry']['yt$statistics']['subscriberCount'];
    	echo "<br />\n";
    	echo "Subscriber Count: ";
        echo $arrTwo;

    // print_r($arrOne);

    // foreach($arrOne as $key => $value){
    //     echo "Key: $key ";
    //     echo "Value: ";
    //     print_r($value);
    //     echo "<br />\n";
    // }
     // echo '<br>-------------</br>';


  
  //    foreach($arrTwo as $key => $value){
    //      echo "Key: $key ";
            // echo "Value: ";
            // print_r($value);
            // echo "<br />\n";
    //  }



        // foreach($arrTwo as $key => $value){
     //     echo "Key: ".$key.", Value: ".$value."<br />";



?>

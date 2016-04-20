<?php
if (isset($_POST['tag']) && $_POST['tag'] != '') 
{
	$tag = $_POST['tag'];
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
 	$response = array("tag" => $tag, "success" => 0, "error" => 0);
             if($tag == 'data1')
             {
					 require_once 'include/DB_Connect.php';
                     $db1 = new DB_CONNECT();
					 $id=$_POST['id'];
					 $name=$_POST['name'];
					 $loc=$_POST['loc'];
					 $zip=$_POST['zip'];
					 $log1 = mysql_query("insert into survey(vid,name,loc,zip) values('$id','$name','$loc','$zip')") or die(mysql_error());	
					 if($log1)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
					
					 
             }
             if($tag == 'data2')
             {

               require_once 'include/DB_Connect.php';
               $db1 = new DB_CONNECT();

               $tphone=$_POST['tphone'];
               $other=$_POST['other'];
               $mob=$_POST['mob'];
               $timein=$_POST['timein'];
               $timeout=$_POST['timeout'];
               $log2 = mysql_query("insert into survey2(tphone,others,mob,timein,timeout) values('$tphone','$other','$mob','$timein','$timeout')") or die(mysql_error());
                  
                   if($log2)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}

             } 	
             if($tag =='data3')
             {
                   require_once 'include/DB_Connect.php';
                   $db1 = new DB_CONNECT();
                  $lati=$_POST['lati'];
                   $longi=$_POST['longi'];
                   $log3=mysql_query("insert into survey3(lati,longi) values('$lati','$longi')")or die(mysql_error());
                  
                    if($log3)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}


             }	
             if($tag =='data4')
             { 
             	require_once 'include/DB_Connect.php';
                $db1 = new DB_CONNECT();
                       $seasonal=  $_POST['seasonal'];
                       $famous=  $_POST['famous'];
                       $others=  $_POST['others'];
                    $log4=mysql_query("insert into survey4(seasonal,famous,others) values('$seasonal','$famous','$others')")or die(mysql_error());
                  
             	
             	 if($log4)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             }	
             if($tag =='data5')
             {
             	require_once 'include/DB_Connect.php';
               $db1 = new DB_CONNECT();

                     $gloves= $_POST['gloves'];
                    $personalclean= $_POST['personalclean'];
                    $cleanloc= $_POST['cleanloc'];
                     $material= $_POST['material'];
                      $equipment= $_POST['equipment'];
             	
             	   $log5=mysql_query("insert into survey5(gloves,personalclean,cleanloc,material,equipment) values('$gloves','$personalclean','$cleanloc','$material','$equipment')")or die(mysql_error());
                  
             	    if($log5)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             }	
             if($tag =='data6')
             {
             	require_once 'include/DB_Connect.php';
               $db1 = new DB_CONNECT();
                        $wateruse = $_POST['wateruse'];
                        $artimaterial =  $_POST['artimaterial'];
                         $congestion = $_POST['congestion'];
                         $registration = $_POST['registration'];

             	 $log6=mysql_query("insert into survey6(wateruse,artimaterial,congestion,registration) values('$wateruse','$artimaterial','$congestion','$registration')")or die(mysql_error());
                  
             	  if($log6)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             }	
			 if($tag =='data7')
             {
             	require_once 'include/DB_Connect.php';
                $db1 = new DB_CONNECT();
                 $foodrate = $_POST['foodrating'];
                 $servicerate = $_POST['servicerating'];
                 $servicetime = $_POST['servicetiming'];
                 $description= $_POST['description'];
                 $personaleval= $_POST['personaleval'];
                  $log7=mysql_query("insert into survey7(foodrate,servicerate,servicetime,description,personaleval) values('$foodrate','$servicerate','$servicetime','$description','$personaleval')")or die(mysql_error());
                  
                   if($log7)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             	
             }	
             if($tag =='data8')
             {

                    require_once 'include/DB_Connect.php';
                    $db1 = new DB_CONNECT();
                     
                $finalrate = $_POST['finalrate'];

             	 $log8=mysql_query("insert into survey7(finalrate) values('$finalrate')")or die(mysql_error());
                  
             	  if($log8)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             }	
             if($tag =='adpic')
             {
                  require_once 'include/DB_Connect.php';
                  $db1 = new DB_CONNECT();
                 $image1 = $_POST['img1'];
                 $image2 = $_POST['img2'];
                 $image3 = $_POST['img3'];
                 $log9=mysql_query("insert into images(image1,image2,image3) values('$image1','$image2','$image3')")or die(mysql_error());
                  
                  if($log9)
					 {
								 $response["success"] = 1;
							     echo json_encode($response);
					}
					 else
					 {
					   $response["success"] = 0;
					   echo json_encode($response);
					}
             	
             }	
}
else {
    echo "Access Denied";
}
?>
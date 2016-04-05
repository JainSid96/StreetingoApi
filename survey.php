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
			 
}
else {
    echo "Access Denied";
}
?>
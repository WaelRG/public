<include draw.php>
<include descibe.php>
<?php
$dbConn = mysqli_connect('localhost', 'root', '', 'firstweb') or die('MySQL connect failed. ' . mysqli_connect_error());
$dbConn ->set_charset("UTF8");
function dbQuery($sql) {
	global $dbConn;
	$result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
	return $result;
}
function dbFetchAssoc($result) {
	return mysqli_fetch_assoc($result);
	
}

function dbNumRows($result) {
    return mysqli_num_rows($result);
}

function getcount(){
  
    $sql ="select counter from webfirst  where id='1'";
    $result=dbQuery($sql);
    //$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
   // echo json_encode(array_values($data));
   while($data = dbFetchAssoc($result)){
   foreach($data as $key => $value){
    return $value;
    //echo $data[$key];
  }}
}
if (session_start()){
     $var=getcount();
     $var++;
     $sql ="update webfirst SET counter='$var'";
     $result=dbQuery($sql);
     if($var%2==0){
        header("Location:http://localhost/firstweb/descibe.php");
     }
     else{
        header("Location:http://localhost/firstweb/draw.php");
     }
    }

?>
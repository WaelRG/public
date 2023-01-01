<include chain.php>
 <?php
function getip(){
    $ip_address='';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
     $ip_address=$_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ip_address=$_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ip_address=$_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
    $ip_address=$_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
    $ip_address=$_SERVER['REMOTE_ADDR'];
    else
     $ip_address='UNKNOWN';
     return $ip_address;
}
$var='cat'
?>
<!DOCTYPE html>
<html>
  
    <head>
        <title>Draw</title>
    </head>
    <body>
    
                <h1 style="font-size:300%;text-align: center;"> Draw a <?php echo $var?> </h1>
        <button type="button" onclick="alert('Saved Successfully')">Submit</button>
      <button onclick="window.location.href='http://localhost/firstweb/gallery.html';" >
            skip to gallery
        </button>
        <canvas id="myCanvas" width="700" height="400" style="border:1px solid #000000;">
Your browser does not support the HTML canvas tag.
</canvas>
     
    </body>
</html>

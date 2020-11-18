<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
if ($_FILES["fileToUpload"]["error"] > 0){
	echo "Error: " . $_FILES["fileToUpload"]["error"];
}else{
	session_start();
	$Name=$_POST['name'];
	$Comment=$_POST['comment'];
	$UploadDate=date('Y-m-d H:i:s');
	
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    $ip = get_client_ip();
	     
    $_SESSION['Filename']=$_FILES["fileToUpload"]["name"];
	$_SESSION['FileType']=$_FILES["fileToUpload"]["type"];
	$_SESSION['FileSize']=($_FILES["fileToUpload"]["size"] / 1024)." Kb";	


	$newfilename = time() . '_' . rand(100, 999) . '.' . end(explode(".",$_FILES["fileToUpload"]["name"]));

	if(!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"Upload/".$_POST['HW']."/".$newfilename)){
		echo "Error";
	}

	include 'dbinfo.php';

	try {

	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	    $sql="INSERT INTO ".$_POST['HW']." (Name , FileName , Comment , UploadDate , IP) VALUES ('$Name','$newfilename','$Comment','$UploadDate','$ip')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
		$_SESSION['Uploaded']='True';
		header("Location: ../Cpp/#Homework");
		die();
    }
	catch(PDOException $e)
    {
		$_SESSION['Uploaded']='Error';
		echo 'Connect error:'.$e;
		die();
    }

	$conn = null;
	
}
	//echo "Upload/".$_POST['HW']."/".$newfilename;
?>
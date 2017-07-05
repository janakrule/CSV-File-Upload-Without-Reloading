<?php
include('database.php');
session_start();
$userid = '1'; //$userid 

$valid_formats = array("csv");
if ($_POST['do'] == "upload") {
    
    $name = $_FILES['imagefile']['name']; // filename to get file's extension 
    $size = $_FILES['imagefile']['size'];


	
    if (strlen($name)) {
        list($sometext, $extension) = explode(".", $name); // get the file's extension 
		echo "qwerty11";
        if (in_array($extension, $valid_formats)) { // check it if it's a valid format or not
           if ($size < (2048 * 1024)) { // check it if it's bigger than 2 mb or no
                echo "qwerty";
				$imagename = md5(uniqid() . time()) . "." . $extension;
                $tmp = $_FILES['imagefile']['tmp_name'];
                if (move_uploaded_file($tmp, "uploads/" . $imagename)) {
                    mysql_query("UPDATE `users` SET `avatar`='$imagename' WHERE `id`='$userid'");
                    echo "<img src='./uploads/" . $imagename . "'  class='preview'>";
                } 
				else 
				{
					?>
					<script >
                    		
                    </script>
					
					<?php
                    echo "Could not move the file.";
                }
           } else {
                echo "Your image size is bigger than 2MB.";
            }
        } else {
            echo "Invalid file format.";
        }
    } else {
        echo "Please select image..!";
    }
    exit();
}
?>
<?php

include('database.php');
session_start();
$userid = '1'; //$userid
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CSV File Upload Without Reloading</title>
        <script type="text/javascript" src="./theme/javascript/jquery.min.js"></script>
        <script type="text/javascript" src="./theme/javascript/jquery.form.js"></script>
        <link rel='stylesheet' href='./theme/css/style.css' type='text/css' />
        <script type="text/javascript" >
            $(document).ready(function() {
                $('#imagefile').live('change', function() {
                    $("#view").html('');
                    $("#view").html('<img src="./theme/img/loading.gif" />');
                    $(".ajaxform").ajaxForm({
                        target: '#view'
                    }).submit();
                });
            });
        </script> 
    </head> 
    <body>
        JANAK ARORA
        <div style="width:600px">
            <form class="ajaxform" method="post" enctype="multipart/form-data" action='upload.php'>
                <input type="hidden" name="do" value="upload"/>
                Upload Your File <input type="file" name="imagefile" id="imagefile" />
            </form>
           <div id='view'></div>
        </div>
    </body>
</html>
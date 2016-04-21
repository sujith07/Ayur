<html>
    <head>
        <title>PHP Action Page</title>
    </head>

    <body>
        <?php
            $myFile=fopen("newfile.txt", "a+") or die("Unable to story name");
            
            fwrite($myFile, $_POST["Name"]);
            fwrite($myFile, ",");
            fwrite($myFile, $_POST["Email"]);
            fwrite($myFile, "\n");

            fclose($myFile);

        ?>

    <p>Thanks for your submission</p>
    </body>
</html>
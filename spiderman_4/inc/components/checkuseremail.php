
<?php
include "../../db/db.php";
include "../../db/functions.php";

$xmlDoc=new DOMDocument();
$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$email = sanitizeData($_GET["email"]);
$resultCount = 0;

//If the query is not empty:
if (strlen($email)>0) {
    $querySQL = "   SELECT `emailaddress`
                    FROM `users`
                    WHERE `emailaddress` = '{$email}'";
    $result = $dbconn->query($querySQL);

    while ($current = $result->fetch_assoc()){
        $resultCount+=1;
    }
}

if($resultCount > 0){
    echo "Email is already taken";
}

else{
    echo "Email is valid";
}

?>
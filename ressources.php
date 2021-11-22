<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ressources</title>  
</head>
<body>
    <table>
        <caption>Form informations</caption>
        <thead>
            <tr>
                <th>Var</th>
                <th>Val</th>
            </tr>            
        </thead>
        <tbody>
        <?php
            foreach($_POST as $var => $val){
                echo "<tr><td>$var</td><td>";
                if (is_array($val)) {
                    echo implode(', ', $val);
                } else {
                    echo $val;
                }
                echo "</td></tr>";                                  
            }
            //image
            if(!empty($_FILES["photo"])){
                //recuperation de l'extension
                $fileType = $_FILES["photo"]['type'];
                $fileType = substr($fileType, strpos($fileType, "/") + 1);  
                //sauvegarde de l'image
                move_uploaded_file(
                    $_FILES["photo"]['tmp_name'],
                    __DIR__ . '/img/uploaded-photo.' . $fileType
                );  
                echo "<tr><td>Avatar</td><td><img src=\"img/uploaded-photo." . $fileType . "\" alt=\"Avatar\"></td></tr>";
            }
        ?>
        </tbody>
    </table>    
</body>
</html>


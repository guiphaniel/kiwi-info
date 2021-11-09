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
        ?>
        </tbody>
    </table>    
</body>
</html>


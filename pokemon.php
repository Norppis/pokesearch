
<html>

<head>
    
 <link rel="stylesheet" href="styles.css">   
    
    </head>


<body>




<?php

$json = file_get_contents("http://api.pokemontcg.io/v1/cards?name=" . $_POST['name']);
$obj = json_decode($json);
foreach($obj->cards as $card) {
    echo '<div class="card">';
    echo '<a href="';
    echo $card->imageUrlHiRes;
    echo '">';
    echo '<img class="pokeimg" src="';
    echo $card->imageUrl;
    echo '"></a><br>';
    echo '<div class="card_name">';
    echo $card->name . '<br>';
    
    echo '</div>';
    echo '<div class="card_info">';
    echo $card->set . '<br>';
    echo $card->rarity . '<br>';
    echo '</div>';
    echo '</div>';
}


?>
    
    </body>   
    </html>
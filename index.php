<?php
// variabile con testo
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam excepturi quos delectus saepe tenetur veniam rerum voluptas dignissimos facilis. Deleniti, nesciunt atque necessitatibus magnam labore perspiciatis voluptas dolorum beatae architecto dolore esse ea ab incidunt illo facere deserunt laborum temporibus reprehenderit optio facilis! Quibusdam libero itaque, magni blanditiis laudantium recusandae fuga ipsa suscipit et dicta repellendus molestiae laborum ea vero facilis corporis ut a, debitis ipsam tenetur voluptatibus quam aspernatur iure. Iusto, quae dignissimos tempora obcaecati expedita eligendi. Tenetur beatae, eos debitis sint quam blanditiis quaerat eaque aut rem nemo voluptatibus alias quasi voluptate distinctio? Non cumque perferendis accusantium vel!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, hic labore? Ad doloremque quisquam porro debitis maxime ex ullam assumenda qui necessitatibus modi nobis nisi ut dolores doloribus veritatis earum consequatur illum sit voluptas, consequuntur, rerum sed alias placeat dignissimos. Ipsam, est facere eligendi earum alias labore reiciendis asperiores maiores.";

$badWord = $_GET["badWord"];


// var_dump($_GET);
echo $text;
echo  "<br><br>" . " lunghezza =" . strlen($text);


if(stripos($text , $badWord) !== false)
$text = str_ireplace($badWord, "***",$text);
echo "<h1>text censured</h1>";

echo $text;
echo  "<br><br>" . " lunghezza =" . strlen($text);
?>







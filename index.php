<?php 
$censura = $_GET["dolor"];
$leng = strlen($paragrafo); 
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam perferendis voluptatem quos architecto numquam suscipit nisi beatae recusandae sapiente!";
$valoreCensurato = "***";

$paragrafo = str_replace($censura,$valoreCensurato,$paragrafo);

?>

<h1>
    <?php echo $paragrafo ?>
</h1>
<h2>
    lunghezza:<?php echo $leng ?>
</h2>

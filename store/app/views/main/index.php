<!--
@description - view through framework Vue3 for page Goods (GoodsController, model -Goods)
@author -      Vitali Romanenko
-->

<?php require 'templates/header.html' ?>
<main class="container px-3">
    <?php foreach ($mainList as $value) :?>
        <h1><?php echo $value[ 'title' ];?> </h1>
        <img id="object-position-1" src="images/<?php echo $value[ 'img' ];?>.jpg" class="img-space" >
        <p class="lead"><?php echo $value[ 'description' ];?> </p>
    <?php endforeach;?>
</main>
<?php require 'templates/footer.html' ?>

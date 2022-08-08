<!--
@description - view for page About (AboutController, model -About)
@author -      Vitali Romanenko
-->

<?php require 'templates/header.html' ?>

<main class="container px-3">
    <?php foreach ($aboutList as $value) :?>
    <h1><?php echo $value[ 'title' ];?></h1>
    <div class="d-flex flex-wrap">
        <?php for ($i = 0; $i < 3; $i++) :?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <img src="/images/<?php echo ($i + 1) ?>_Milan_650x404.jpg" class="img-thumbnail">
                </div>
            </div>
        <?php endfor; ?>
        <p class="stb"><?php echo $value[ 'description' ];?> </p>
        <p class="stb"> <?php echo $value[ 'footer' ];?> </p>
    </div>
    <?php endforeach;?>
</main>

<?php require 'templates/footer.html' ?>

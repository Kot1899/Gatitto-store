<!--
@description - view for page Contact (ContactController, model -Contact)
@author -      Vitali Romanenko
-->

<?php require 'templates/header.html' ?>
<main class="container px-3">
    <h1 class="mb-5">Contacts</h1>
    <div class="d-flex flex-wrap">
        <?php foreach ($contactList as $value) :?>
            <div class="card1 mb-3 rounded-3 ">
                <div class="card-body-contact">
                    <img src="images/<?php echo $value['id'] ?>_contact.jpg" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo $value['email']?> </li>
                    </ul>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</main>
<?php require 'templates/footer.html' ?>

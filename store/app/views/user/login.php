<!--
@description - view for page Sign in (UserController, model - User)
@author -      Vitali Romanenko
-->

<?php require 'templates/header.html' ?>
<main class="modal-body my-p-5 pt-0">
        <?php if (isset($errors) && is_array($errors)) : ?>
            <div class="login-css">
                <div class="form-control2" style="text-align: center">
                  <span>
                    <ul>
                        <?php foreach ($errors as $value) : ?>
                            <li> <?php echo $value; ?> </li>
                        <?php endforeach;?>
                    </ul>
                  </span>
                </div>
            </div>
        <?php endif;?>
        <form class="login-css" action="#" method="post">
            <div class="form-floating mb-3">
                 <span>
                     <strong>Login</strong>
                     <br/>
                     <input type="text" class="form-control rounded-4" name="Login" id="Login"
                            placeholder="name@example.com" value="<?php echo $login; ?>"/>
                 </span>
            </div>
            <div class="form-floating mb-3">
                 <span>
                     <strong>Password</strong>
                     <br/>
                     <input type="text" class="form-control rounded-4" name="Password" id="Password"
                            value="<?php echo $password; ?>"/>
                 </span>
            </div>
            <input type="submit" name="Submit" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" value="Submit"/>
            <a class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" href="/user/registration">Registration</a>
        </form>
</main>
<?php require 'templates/footer.html' ?>


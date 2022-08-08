<!--
@description - view for page Registration (UserController, model - User)
@author -      Vitali Romanenko
-->

<?php require 'templates/header.html' ?>
<main class="modal-body my-p-5 pt-0">
    <?php if ($result) :?>
        <div class="login-css">
            <div >
                <input type="text" class="form-control2 rounded-4" style="text-align: center"
                       name='fault' id='fault' placeholder="U have just registered)">
            </div>
        </div>
    <?php else :?>
        <?php if (isset($errors) && is_array($errors)) :?>
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
            <div class="form-floating mb-3">
                 <span>
                     <strong>First name</strong>
                     <br/>
                     <input type="text" class="form-control rounded-4" name="Name" id="Name"
                            value="<?php echo $firstname; ?>"/>
                 </span>
            </div>
            <div class="form-floating mb-3">
                <span>
                    <strong>Email</strong>
                    <br/>
                     <input type="text" class="form-control rounded-4" name="Email" id="Email"
                            value="<?php echo $email; ?>"/>
                </span>
            </div>
            <div class="form-floating mb-3">
                <span>
                    <strong>Sex</strong>
                    <br/>
                    <input type="text" class="form-control rounded-4" name="Sex" id="Sex" placeholder="male/female"
                           value="<?php echo $sex; ?>"/>
                </span>
            </div>
            <div class="form-floating mb-3">
                <span>
                    <strong>Age</strong>
                    <br/>
                        <input type="number" class="form-control rounded-4" name="Age" id="Age" placeholder="18"
                               value="<?php echo $age; ?>"/>
                </span>
            </div>
            <input type="submit" name="Submit" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" value="Submit"/>
        </form>
    <?php endif;?>
</main>
<?php require 'templates/footer.html' ?>


<?php

/**
 * return data сart (don't consist yet)
 */
class CartController
{
    public function actionCart(): void
    {
        require_once (ROOT.'/../app/views/cart/index.php');
    }
}

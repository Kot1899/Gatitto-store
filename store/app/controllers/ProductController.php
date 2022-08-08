<?php

/**
 * return data about product page
 * @author Vitali Romanenko
 */

class ProductController
{
    /**
     * return data about every page any cats
     * @param
     */
    public function actionIndex($id)
    {
        if ($id) {
            require_once(ROOT . '/../app/views/product/index.php');
            return true;
        }
    }
}

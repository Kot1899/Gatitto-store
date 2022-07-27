<?php

// check attach file
$checkInclude = ROOT.'/../app/models/Product.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
    }else
    {
        echo '<br>'.'Vitali, file with modelMain was 
            not found and do not include'.'<br>';
    }

/**
 * return data about main page
 * @author Vitali Romanenko
 */

class ProductController
{

    /**
     * return data about every page any cats
     * @param
     */
    public function actionName($name)
    {
        if ($name) {
            $productName = ProductPage::getProductById($name);
            require_once(ROOT . '/../app/views/product/name.php');

            return true;
        }
    }
}

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
     * return data about main page
     * @param
     */
    public function actionProduct()
    {
        $productList = array();
        $productList = ProductPage::getProductPage();
//        print_r( $productList);
        require_once(ROOT . '/../app/views/product/index.php');

        return true;
    }

    /**
     * return data about every page any cats
     * @param
     */
    public function actionName($id)
    {

        if ($id) {
            $productId = ProductPage::getProductById($id);
//print_r( $productId);
            require_once(ROOT . '/../app/views/product/name.php');

            return true;
        }
    }
}

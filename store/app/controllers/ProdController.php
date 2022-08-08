<?php

/**
 * attach files
 */

$checkInclude = ROOT . '/../app/models/Product.php';
if (file_exists($checkInclude)) {
    include_once($checkInclude);
} else {
    echo '<br>' . 'Vitali, file with modelGoods was not found and do not include' . '<br>';
}

/**
 * return data with my one product through VUE3
 */

class ProdController
{
    /**
     * return data about product
     * @param
     * @throws JsonException
     */
    public function actionProd($id)
    {
        if ($id) {
            $prodList = json_encode(ProductPage::getProductById($id), JSON_THROW_ON_ERROR);
            header('Content-Type: application/json; charset=utf-8');
            echo $prodList;
        }
    }
}

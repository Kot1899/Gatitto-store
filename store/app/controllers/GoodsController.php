<?php

// check attach file
$checkInclude = ROOT.'/../app/models/Goods.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
    }else
    {
        echo '<br>'.'Vitali, file with modelGoods was 
        not found and do not include'.'<br>';
    }

/**
 * return data about news
 */
class GoodsController
{
    /**
     * return data about news
     * @param $goodsList
     */
    public function actionGoods()
    {
        $goodsList=array();
        $goodsList= Goods::getGoodsList();

        require_once (ROOT.'/../app/views/goods/index.php');

        return true;
    }
}


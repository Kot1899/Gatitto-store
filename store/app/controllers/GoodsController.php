<?php

/**
 * return data with full goods
 */
class GoodsController
{
    /**
     * return data about goods
     * @return bool
     */
    public function actionGoods()
    {
        $goodsList = Goods::getGoodsList();
        require_once(ROOT . '/../app/views/goods/index.php');
        return true;
    }
}

<?php

// check attach file
$checkInclude = ROOT.'/../app/models/Basket.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
      }else
    {
        echo '<br>'.'Vitali, file with modelBasket was 
        not found and do not include'.'<br>';
    }

/**
 * return data about news
 */
class BasketController
{
    /**
     * return data about news
     * @param $BasketList
     */
    public function actionBasket()
    {
        $basketList=array();
        $basketList= Basket::getBasketList();

        require_once (ROOT.'/../app/views/basket/index.php');

        return true;
    }
}

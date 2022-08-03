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
 * return data  first page
 */
class AppController
{
    /**
     * return data about news
     * @param
     */
    public function actionApp()
    {

        $appList= json_encode(Goods::getGoodsList());
        header('Content-Type: application/json; charset=utf-8');
        echo $appList;


//        return true;
    }

}


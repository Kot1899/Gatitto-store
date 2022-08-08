<?php

/**
 * return data with my goods through VUE3
 */
class AppController
{
    /**
     * return data about goods
     * @param
     */
    public function actionApp()
    {
        $appList = json_encode(Goods::getGoodsList(), JSON_THROW_ON_ERROR);
        header('Content-Type: application/json; charset=utf-8');
        echo $appList;
    }
}

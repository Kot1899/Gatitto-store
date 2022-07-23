<?php

// check attach file
$checkInclude = ROOT.'/../app/models/News.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
      }else
    {
        echo '<br>'.'Vitali, file with modelNews was 
        not found and do not include'.'<br>';
    }

/**
 * return data about news
 */
class NewsController
{
    /**
     * return data about news
     * @param $newList
     */
    public function actionIndex()
    {
        $newsList=array();
        $newsList= News::getNewsList();

        require_once (ROOT.'/../app/views/news/index.php');

        return true;
    }

    public function actionView($id)
    {
        if($id){
            $newsItem=News::getNewsById($id);
            echo '<pre>';
            print_r($newsItem);

        }
        return true;
    }
}

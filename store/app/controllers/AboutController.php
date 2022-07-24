<?php

// check attach file
$checkInclude = ROOT.'/../app/models/About.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
      }else
    {
        echo '<br>'.'Vitali, file with modelAbout was 
        not found and do not include'.'<br>';
    }

/**
 * return data about news
 */
class AboutController
{
    /**
     * return data about news
     * @param $AboutList
     */
    public function actionIndex()
    {
        $aboutList=array();
        $aboutList= About::getAboutList();

        require_once (ROOT.'/../app/views/about/index.php');

        return true;
    }
/*
    public function actionView($id)
    {
        if($id){
            $newsItem=News::getNewsById($id);
            echo '<pre>';
            print_r($newsItem);

        }
        return true;

    }
*/
}

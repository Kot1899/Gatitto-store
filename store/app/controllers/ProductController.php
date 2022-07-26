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
    public function actionMain()
    {
        $mainList = array();
        $mainList = MainPage::getMainPage();

        require_once(ROOT . '/../app/views/main/index.php');

        return true;
    }

}

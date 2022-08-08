<?php

/**
 * return data about site
 */
class AboutController
{
    /**
     * return data of page about
     * @return bool
     */
    public function actionIndex()
    {
        $aboutList = About::getAboutList();
        require_once(ROOT . '/../app/views/about/index.php');
        return true;
    }
}

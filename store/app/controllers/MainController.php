<?php

/**
 * attach files
 */

$checkInclude = ROOT . '/../app/models/Main.php';
if (file_exists($checkInclude)) {
    include_once($checkInclude);
} else {
    echo '<br>' . 'Vitali, file with modelMain was not found and do not include' . '<br>';
}

/**
 * return data about main page
 * @author Vitali Romanenko
 */

class MainController
{
    /**
     * return data about main page
     */
    public function actionMain()
    {
        $mainList = MainPage::getMainPage();
        require_once(ROOT . '/../app/views/main/index.php');
        return true;
    }
}

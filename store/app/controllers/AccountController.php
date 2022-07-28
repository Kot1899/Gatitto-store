<?php

// check attach file
$checkInclude = ROOT.'/../app/models/Account.php';
    if(file_exists($checkInclude))
    {
        include_once ($checkInclude);
      }else
    {
        echo '<br>'.'Vitali, file with modelAbout was 
        not found and do not include'.'<br>';
    }

/**
 * return data about users account
 */
class AccountController
{
  public function actionIndex()
  {
//      $aboutList=array();
//      $aboutList= About::getAboutList();

      require_once (ROOT.'/../app/views/account/index.php');

      return true;
  }
}

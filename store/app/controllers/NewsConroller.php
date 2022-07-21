<?php

class NewsController
{
    public function actionIndex()
    {
        echo 'it is list of News';
        return true;
    }

    public function actionView()
    {
        echo 'it is shower of one News';
        return true;
    }
}

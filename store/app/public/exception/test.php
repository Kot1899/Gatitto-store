<?php
/**
 * @param Exception
 */


class checkFile extends Exception
{
    public function checkErrorsMessage ()
    {
        return 'checkFile found some error: '. $this->getMessage();
    }
}

/**
 * @param $file
 */

function myFile($data):string
{
    if( 10>$data){
        throw new checkFile('or u number less10 or 
        this file not found by "file_exist"');
    }
}

try{
    myFile(5);
}catch (checkFile $e){
    echo $e->checkErrorsMessage();
}catch (Exception $e){
    echo $e->getMessage();
    die();
}
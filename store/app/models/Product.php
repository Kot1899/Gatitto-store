<?php

class ProductPage
{
    /**
     * return only one card
     */

    public static function getProductById($id)
    {
        if ($id) {
            //request to DB
            $connection = DataBase::getConnection();

            $stm = 'select * from GoodsPage where id=' . $id;

            $result = $connection->query($stm);
            $productId = $result->fetch(PDO::FETCH_ASSOC);

            return $productId;
        }
    }
}

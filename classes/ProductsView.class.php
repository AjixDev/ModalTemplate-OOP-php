<?php
include "classes/Products.class.php";


class ProductsView extends Products {

    public function ShowProduct($id) {
        $results = $this->getProduct($id);
        echo $results[0]['prodId'] . "<br>";
        echo $results[0]['prod_title'] . "<br>";
        echo $results[0]['prod_description'] . "<br>";
    }
}

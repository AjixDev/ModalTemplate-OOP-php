<?php

class ProductsView extends Products {

    public function ShowProduct($id) {
        $results = $this->getProduct($id);
        echo $results[0]['prodId'];
        echo $results[0]['prod_title'];
        echo $results[0]['prod_description'];
    }
}

<?php
include_once "./Products.class.php";

class Ajax extends Products {
    public function AjaxPostValue() {
        // Checking, if post value is
        // set by user or not
        if (isset($_POST['btnValue'])) {
            // Getting the value of button
            // in $btnValue variable

            $btnValue = $_POST['btnValue'];

            // Sending Response
            echo $btnValue . "Success";
        } else {
            print_r(http_response_code());
        }
    }
}

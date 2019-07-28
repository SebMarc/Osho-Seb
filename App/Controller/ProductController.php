<?php

class ProductController 
{
    public function product() {
        $this->show('product');
    }

    private function show($templateName, $templateVars = array()) {
        // include(__DIR__ . '/../views/header.tpl.php');
        include(__DIR__ . '/../views/' . $templateName . '.tpl.php');
        include(__DIR__ . '/../views/footer.tpl.php');
    }

}
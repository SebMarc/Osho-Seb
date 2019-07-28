<?php

class CartMiniController 
{
    public function cartmini() {
        $this->show('cartmini');
    }

    private function show($templateName, $templateVars = array()) {
        include(__DIR__ . '/../views/header.tpl.php');
        include(__DIR__ . '/../views/' . $templateName . '.tpl.php');
        include(__DIR__ . '/../views/footer.tpl.php');
    }

}
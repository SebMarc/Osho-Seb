<?php

class CategoryController 
{
    public function category() {
        $this->show('categories');
    }

    private function show($templateName, $templateVars = array()) {
        include(__DIR__ . '/../views/header.tpl.php');
        include(__DIR__ . '/../views/' . $templateName . '.tpl.php');
        include(__DIR__ . '/../views/footer.tpl.php');
    }

}
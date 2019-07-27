<?php

class NotFoundController
{
    public function notfound() {
        $this->show('notfound');
    }

    private function show($templateName, $templateVars = array()) {
        include(__DIR__ . '/../views/header.tpl.php');
        include(__DIR__ . '/../views/' . $templateName . '.tpl.php');
        include(__DIR__ . '/../views/footer.tpl.php');
    }

}
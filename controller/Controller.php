<?php

class Controller {
    public function render($page,array $data=[]){
        extract($data);
       include "views/".$page.".php";
    }

}
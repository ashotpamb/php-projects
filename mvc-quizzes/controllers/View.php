<?php
class View
{
    public function render($page,$data = []){
        extract($data);
        include(ROOT.'/views/'.$page);
    }
}

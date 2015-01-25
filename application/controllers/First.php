<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author ShirleyPC
 */
class First extends Application {
    //put your code here
    
    public function zzz() {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author ShirleyPC
 */
class Bingo extends Application {
    //put your code here
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get(5));
        $this->render();
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get(6));
        $this->render();
    }
}

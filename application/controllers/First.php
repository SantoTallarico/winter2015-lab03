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
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get(1));
        $this->render();
    }
    
    function gimme($index) {
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get($index));
        $this->render();
    }
}

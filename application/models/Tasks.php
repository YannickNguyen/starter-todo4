<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tasks
 *
 * @author Yannick
 */
class Tasks extends CSV_Model {

    // Constructor
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/tasks.csv', 'id');
    }

}

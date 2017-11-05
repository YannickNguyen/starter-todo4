<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

/**
 * Description of TaskListTest
 *
 * @author Yannick
 */
class TaskListTest extends TestCase {

    private $CI;

    public function setUp() {
        $this->CI = & get_instance();
    }

    public function testSet() {
        $magic = $this->CI->tasks->all();

        try {
            $completeTasks = 0;
            $incompleteTasks = 0;
            foreach ($magic as $task) {
                if ($task->status != 2) {
                    $incompleteTasks++;
                } else {
                    $completeTasks++;
                }
            }
            $this->assertGreaterThan($completeTasks, $incompleteTasks);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            //$this->assertEquals(null, $this->task->$key);
        }
    }

}

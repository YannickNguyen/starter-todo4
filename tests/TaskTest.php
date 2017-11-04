<?php

use PHPUnit\Framework\TestCase;

require('../application/models/Task.php');

class TaskTest extends TestCase {

    public $task;

    public function setUp() {
        $this->task = new Task();
    }

    public function testSet() {
        $key = 'task';
        $value = 'code igniter is tragic';
        
        try {
            $this->task->__set($key, $value);
            $this->assertEquals($value, $this->task->$key);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
    }
    
        public function testSet2() {
        $key = 'priority';
        $value = 1;
        
        try {
            $this->task->__set($key, $value);
            $this->assertEquals($value, $this->task->$key);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
    }
    
        public function testSet3() {
        $key = 'size';
        $value = 10;
        
        try {
            $this->task->__set($key, $value);
            $this->assertEquals($value, $this->task->$key);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
    }
    
        public function testSet4() {
        $key = 'group';
        $value = 1;
        
        try {
            $this->task->__set($key, $value);
            $this->assertEquals($value, $this->task->$key);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
    }
    
        public function testSet5() {
        $key = 'task';
        $value = 'help me';
        
        try {
            $this->task->__set($key, $value);
            $this->assertEquals($value, $this->task->$key);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
    }

}

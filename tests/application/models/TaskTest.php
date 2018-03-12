<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{

    private $CI;
    private $tasktmp;

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->tasktmp = new Task();
    }

    function testSetValidTask()
    {
        $this->tasktmp->setTask("Chores");
        $this->assertEquals("Chores", $this->tasktmp->task);
    }

    function testSetEmptyTask()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setTask(null);
        $this->assertEquals($this->tasktmp->task, null);
    }

    function testSetInvalidTask()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setTask("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789987654321");
    }

    function testSetValidPriority()
    {
        $this->tasktmp->setPriority(1);
        $this->assertEquals(1, $this->tasktmp->priority);
    }

    function testSetEmptyPriority()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setPriority(null);
        $this->assertEquals($this->tasktmp->priority, null);
    }

    function testSetInvalidPriority()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setPriority(123);
    }

    function testSetValidSize()
    {
        $this->tasktmp->setSize(1);
        $this->assertEquals(1, $this->tasktmp->size);
    }

    function testSetEmptySize()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setSize(null);
        $this->assertEquals($this->tasktmp->size, null);
    }

    function testSetInvalidSize()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setSize(4);
    }

    function testSetValidGroup()
    {
        $this->tasktmp->setGroup(1);
        $this->assertEquals(1, $this->tasktmp->group);
    }

    function testSetEmptyGroup()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setGroup(null);
        $this->assertEquals($this->tasktmp->group, null);
    }

    function testSetInvalidGroup()
    {
        $this->expectException(Exception::class);
        $this->tasktmp->setGroup(5);
    }

    function testSetValidIdStatus() {
      $this->tasktmp->setStatus(1);
      $this->assertEquals(1, $this->tasktmp->status);
    }

    function testSetEmptyStatus() {
      $this->expectException(Exception::class);
      $this->tasktmp->setStatus(null);
        $this->assertEquals($this->tasktmp->status, null);
    }

    function testSetInvalidStatus() {
      $this->expectException(Exception::class);
      $this->tasktmp->setStatus(3);
    }
}

?>

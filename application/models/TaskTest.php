<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {

  function setUp() {
    $this->CI = &get_instance();
    $this->CI->load->model('task');
    $this->task = new Task();

  function testSetValidTask() {
    $this->task->setTask("Chores")
    $this->assertEquals("Chores", $this->task->task);
  }

  function testSetEmptyTask() {
    $this->expectException(Exception::class);
    $this->task->setTask(null) = null;
  }

  function testSetInvalidTask() {
    $this->expectException(Exception::class);
    $this->task->setTask("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789987654321");
  }

  function testSetValidPriority() {
    $this->task->setPriority(1);
    $this->assertEquals(1, $this->task->priority);
  }

  function testSetEmptyPriority() {
    $this->expectException(Exception::class);
    $this->priority->setPriority(null) = null;
  }

  function testSetInvalidPriority() {
    $this->expectException(Exception::class);
    $this->task->setPriority(123);
  }

  function testSetValidSize() {
    $this->task->setSize(1)
    $this->assertEquals(1, $this->task->size);
  }

  function testSetEmptySize() {
    $this->expectException(Exception::class);
    $this->size->setSize(null) = null;
  }

  function testSetInvalidSize() {
    $this->expectException(Exception::class);
    $this->size->setSize(4);
  }

  function testSetValidGroup() {
    $this->task->setGroup(1)
    $this->assertEquals(1, $this->task->group);
  }

  function testSetEmptyGroup() {
    $this->expectException(Exception::class);
    $this->task->setGroup(null) = null;
  }

  function testSetInvalidGroup() {
    $this->expectException(Exception::class);
    $this->task->setGroup(5);
  }

  function testSetValidIdStatus() {
    $this->setStatus(1)
    $this->assertEquals(1, $this->task->status);
  }

  function testSetEmptyStatus() {
    $this->expectException(Exception::class);
    $this->task->setStatus(null) = null;
  }

  function testSetInvalidStatus() {
    $this->expectException(Exception::class);
    $this->task->setStatus(3);
  }
}

?>

<?php
use PHPUnit\Framework\TestCase;
class TaskListTest extends TestCase {
    private $CI;
    private $tasks;
    
    public function setUp() {
        //Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->tasks = new Tasks;
    }
    public function testCollection() {
        $complete = 0;
        $incomplete = 0;
        foreach ($this->tasks->all() as $test) {
            if (strcmp($test->status, "2") === 0) {
                $complete++;
            } else {
                $incomplete++;
            }
        }
        $this->assertGreaterThan($complete, $incomplete);
    }
}
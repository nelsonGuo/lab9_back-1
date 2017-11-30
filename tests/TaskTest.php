<?php
 class TaskTest extends TestCase
  {
    private $CI;

    public function setUp()
    {
      // Load CI instance normally

      $this->CI = &get_instance();
      $this->CI->load->model('task');

    }


    /**
     * unit test for priority
     */
    public function testPriority(){

        //invalid value should not change its default value
        $this->CI->task->priority = 4;//greater
        $this->assertNull($this->CI->task->priority, 'test >= 4');
        
        //invalid value type should not change its default value
        $this->CI->task->priority = 'text';
        $this->assertNull($this->CI->task->priority, 'test non-integer');
        
        //valid value
        $this->CI->task->priority = 3;
        $this->assertEquals(3, $this->CI->task->priority);

        //valid value
        $this->CI->task->priority = 2;
        $this->assertEquals(2, $this->CI->task->priority);

        //valid value
        $this->CI->task->priority = 1;
        $this->assertEquals(1, $this->CI->task->priority);
    }

    /**
     * unit test for size
     */
    public function testSize(){
        //invalid value should not change its default value
        $this->CI->task->size = 4;//greater
        $this->assertNull($this->CI->task->size, 'test >= 4');
        
        //invalid value type should not change its default value
        $this->CI->task->size = 'text';
        $this->assertNull($this->CI->task->size, 'test non-integer');
        
        //valid value
        $this->CI->task->size = 3;
        $this->assertEquals(3, $this->CI->task->size);

                //valid value
        $this->CI->task->size = 2;
        $this->assertEquals(2, $this->CI->task->size);

                //valid value
        $this->CI->task->size = 1;
        $this->assertEquals(1, $this->CI->task->size);
    }
    
    /**
     * unit test for group
     */
    public function testGroup(){
        //invalid value should not change its default value
        $this->CI->task->group = 5;//greater
        $this->assertNull($this->CI->task->group, 'test >= 5');
        
        //invalid value type should not change its default value
        $this->CI->task->group = 'text';
        $this->assertNull($this->CI->task->group, 'test non-integer');
        
        //valid value
        $this->CI->task->group = 4;
        $this->assertEquals(4, $this->CI->task->group);

        //valid value
        $this->CI->task->group = 3;
        $this->assertEquals(3, $this->CI->task->group);

        //valid value
        $this->CI->task->group = 2;
        $this->assertEquals(2, $this->CI->task->group);

        //valid value
        $this->CI->task->group = 1;
        $this->assertEquals(1, $this->CI->task->group);
    }

  }
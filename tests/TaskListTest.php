<?php
   use PHPUnit\Framework\TestCase;

   class TaskListTest extends TestCase
  {  
  
	private $CI;
     
    public function setUp()
    {
        $this->CI = &get_instance();
		$this->CI->load->model('Tasks');
    }
	  
    
    public function testMoreRule ()
    {
	   $tasks = $this->CI->Tasks->all();
	   $countDone = 0;
	   $countTodo = 0;
	   
	   foreach ($tasks as $task)
	   {
		   if($task->status == 2) {
			   $countDone++;
		   } else {
			   $countTodo++;
		   }
	   }
	   
	   $result = ($countTodo - $countDone) > 0 ? true : false;
		   
	   $this->assertEquals(true, $result);
    }

  }
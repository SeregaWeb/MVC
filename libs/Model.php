<?php 
class MyException extends Exception 
{

}

class Model 
{ 
	public $variables = array(
		'%TITLE%'=>'Contact Form',
		'%FIO%'=>'',
		'%EMAIL%'=>'',
		'%OPTION1%'=>'option1',
		'%OPTION2%'=>'option2',
		'%TEXT%'=>'',
		'%ERRORS%'=>'Empty field',
		'%ERRORS_FIO%'=>'',
		'%ERRORS_EMAIL%'=>'',
		'%ERRORS_SELECT%'=>'',
		'%ERRORS_TEXT%'=>''
	);

   public function __construct()
   {

   }
   	
	public function getArray()
   {	    
		return $this->variables;
   }
	
	public function checkForm()
	{
		echo($_POST['fio']);
		echo($_POST['email']);
		echo($_POST['select']);
		echo($_POST['text']);
		$name = $_POST['fio'];
		$name = trim($name);
		if(strlen($name)>0){
			$this->variables['%ERRORS_FIO%'] = '';
		}else{
			echo 1;
			$this->variables['%ERRORS_FIO%'] = 'error empty fio';
		}

		try
		{
			throw new MyException('ERROR');
		}
		catch(Exception $e)
		{
			return 'error';
		}


		// print_r($this->variables['FIO']);
		return false;			
	}
   
	public function sendEmail()
	{
		// return mail()
	}		
}

<?php
class Demo
{
	private $_name;
	
        public function diHola()
          { 
      	      print "Hola ". $this->getName()." !";
	  }

	  public function getName()
	  {
	  	return $this->_name;
	  }
	  public function setName($name)
	  {
	  	if(!is_string($name)||strlen($name)==0)
	  	{
	  		throw new Exception('Valor de name no válido');
	  	}
	  	
	  	$this->_name=$name;
	  	
	  }
}
?>

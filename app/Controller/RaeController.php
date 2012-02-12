
<?php
class RaeController extends Controller {
	var $helpers = array('Html');
	
	
	public function index (){
		
	}
	
	
	public function saveRae() {
		$this->layout = 'ajax';
		
		$name = $this->request->data['name'];
		$city = $this->request->data['city'];
		$description = $this->request->data['description'];
		
		
		$raeInstance = ClassRegistry::init("Rae");
		
		$parameters = array("name"=>$name, "city"=>$city, "description"=>$description );
		
		$raeInstance->save($parameters);
		
		
		$list= $raeInstance->find("all");
		
		
		$this->set('raeList', $list);  
	}
	
	public function listDescription() {
		$this->layout = 'ajax';
		
		$raeInstance = ClassRegistry::init("Rae");
		
		
		$list= $raeInstance->find("all");
		
		
		$this->set('deslist', $list);  
	}
	
    public function listIso() {
    	
    	$this->layout = 'ajax';
		
		$raeInstance = ClassRegistry::init("Rae");
		
		
		$list= $raeInstance->find("all");
		
		$iso = array();
		
	
	
        foreach($list as $identificador){
        	
        	$tuple = array(); 
        	
 
        	        	
        	array_push($tuple,$identificador["Rae"]["iso"]);
        	array_push($iso,$tuple);
        	
       
        	}
       
       $columnas = array(
       			
       			array(
       			
       			"sTitle" => "iso" 
       			
       			
       			),
       
       );
        debug($iso);
       $post = array ("columnas"=> $columnas, "iso" => $iso);
       
       
       return new CakeResponse(array('body' => json_encode($post),'contentType'=>'application/json'));
       
       
		
	 }
}

?>

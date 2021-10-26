<?php
/**
 * MainController
 * Feel free to delete the methods and replace them with your own code.
 *
 * @author darkredz
 */
class MainController extends DooController{

    public function index(){
		$this->data["rootUrl"] = Doo::conf()->APP_URL;
		$this->data["persona"]= Doo::db()->find('Personas');
		$this->renderc('index',$this->data,true);
	
    }
	/**
	 * 
	 * 
	 */
	public function add(){
		$this->data["rootUrl"] = Doo::conf()->APP_URL;
		$this->renderc('form',$this->data,true);
	}
	public function save(){
		var_dump($_POST);
	}


	public function edit(){
		$id = $this->params['id'];
		var_dump($id);
		exit();
		$this->data["persona"]= Doo::db()->find('Personas',array("where"=>'id = ?','param'=>array($id)));
		$this->renderc('index',$this->data,true);
	}
	public function allurl(){	
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::showAllUrl();	
	}
	
    public function debug(){
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::showDebug($this->params['filename']);
    }
	
	public function gen_sitemap_controller(){
		//This will replace the routes.conf.php file
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSitemap(true);		
		DooSiteMagic::buildSite();
	}
	
	public function gen_sitemap(){
		//This will write a new file,  routes2.conf.php file
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSitemap();		
	}
	
	public function gen_site(){
		Doo::loadCore('app/DooSiteMagic');
		DooSiteMagic::buildSite();
	}
	
    public function gen_model(){
        Doo::loadCore('db/DooModelGen');
        DooModelGen::genMySQL();
    }

}
?>
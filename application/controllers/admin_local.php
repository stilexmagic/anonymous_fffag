<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_local extends CI_Controller {

	

	public function index()
	{

		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$this->load->model('home_model','uum2');
			$locales= $this->uum->get_local();
			$sectores=$this->uum2->get_sector_entrega();
			$añadir_producto=$this->input->get('al');
			if($añadir_producto==1){
				$data['title']= "Local agregado satisfactoriamente";
				$data['alert']=1;
			}else if($añadir_producto==3){
				$data['title']="Local eliminado satisfactoriamente";
				$data['alert']=3;
				 
			}else{
				$data['title']="";
				$data['alert']="";
			}
			$data['locales']=$locales;
			$data['sectores']=$sectores;
	
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin/admin_local_view',$data);
		}
		
	}
	public function nuevo_local(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('home_model','uum');
			$sector_reparto = $this->uum->get_sector_entrega();
			$subsector_reparto= $this->uum->get_sub_sector_entrega();
			$data['sector_repartos']=$sector_reparto;
			$data['subsector_repartos']=$subsector_reparto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('pages/admin/admin_nuevo_local_view',$data);
		}
	}
	public function nuevo_local_agregar(){
		
		$checkbox = $this->input->post('check'); //datos del checkbox
		if($checkbox==""){
			echo "<script>alert('Debes seleccionar al menos un sector')</script>";
			$root= base_url()."admin_local/nuevo_local";
			echo "<script>location.href='$root';</script>";	
		}else{
			$sitio = $this->input->post('inputSitioWeb');
			$data = array( //datos del local
	           'nombre_local' => $this->input->post('inputNombre'),
	           'direccion_local' =>$this->input->post('inputDireccion'),
	           'telefono_local' =>$this->input->post('inputFono'),
	           'email' => $this->input->post('inputEmail'),
	           'sitio_referencia' => "http://".$sitio,
	           'horario_entrada' => $this->input->post('inputHorarioEntrada'),
	           'horario_salida' => $this->input->post('inputHorarioSalida'),
	           'horario_entrada_fds' => $this->input->post('inputHorarioEntradaFds'),
	           'horario_salida_fds' => $this->input->post('inputHorarioSalidaFds')
	    	);
	    	
	    	//datos de la foto
	    	$config['upload_path'] = base_url()."img/locales/";  
	    	$config['allowed_types'] = 'gif|jpg|png'; 
	    	$config['max_size'] = '100'; 
	    	
	    	
	    /*	  echo 'Nombre: ' . $_FILES['userfile']['name'] . '<br/>';
			  echo 'Tipo: ' . $_FILES['userfile']['type'] . '<br/>';
			  echo 'Tamaño: ' . ($_FILES['userfile']['size'] / 1024) . ' Kb<br/>';
			  echo 'Guardado en: ' . $_FILES['userfile']['tmp_name'];
		*/
			//guardamos la base de datos 
			$this->load->model('admin_model','uum');
			$id_local_nuevo= $this->uum->agregar_local($data);
	  		move_uploaded_file($_FILES['userfile']['tmp_name'],"img/locales/$id_local_nuevo"."_logo.png");
		 		$root= base_url()."admin_local?al=1";
  				echo "<script>location.href='$root';</script>";	

  			foreach ($checkbox as $s ) {
  				$this->uum->agregar_sector_local($s,$id_local_nuevo);
  			}
  	
		}
		
    }
    
	

}


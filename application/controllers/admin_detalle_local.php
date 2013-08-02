<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_detalle_local extends CI_Controller {

	

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
				echo "<script>alert('Local agregado satisfactoriamente')</script>";
			}
			$data['locales']=$locales;
			$data['sectores']=$sectores;
	
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_local_view',$data);
		}
		
	}
	public function detalle_producto(){
		if($this->session->userdata('id')==""){
			$root= base_url()."admin";
			header("Location: $root");
		}else{
			$this->load->model('admin_model','uum');
			$producto = $this->uum->get_producto();
			$locales = $this->uum->get_local();
			$tipo_producto= $this->uum->get_tipo_producto();
			$data['producto'] = $producto;
			$data['locales'] = $locales; 
			$data['tipo_producto']=$tipo_producto;
			$this->load->view('templades/header_admin',$data);
			$this->load->view('templades/header_detalle_local',$data);
			$this->load->view('pages/admin_detalle_producto_local_view',$data);
		}
	}
}
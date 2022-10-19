<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\fabModel;
 
class Fabricant extends Controller
{
	public function view($page, $data)  {
		$data['title'] = "Fabricants : ". ucfirst($page); // ucfirst() : Met en Capitale la 1ere lettre
		echo view('templates/header', $data);
		echo view('pages/fabricant/'.$page, $data);
		echo view('templates/footer', $data);
	}
	 	public function lister()  {
		$model = new fabModel();
		$data['fabs_detail'] = $model->orderBy('fab_ref')->findAll();
		Fabricant::view("lister", $data);
	}
	public function supprimer($ref)  {
		$model = new fabModel();
		$data['fab'] = $model->where('fab_ref', $ref)->first();
		Fabricant::view("supprimer", $data);
	}
	public function ajouter()  {
		$data = [
			'fab_ref' => "",
			'fab_nom' => "",
			'fab_web'  => "",
			'fab_coord'  => ""
			];
		Fabricant::view("ajouter", $data);
	}
	public function visualiser($ref)  {
		$model = new fabModel();
                $data['fab'] = $model->where('fab_ref', $ref)->first();
		Fabricant::view("visualiser", $data);
	}
	public function modifier($ref)  {
		$model = new fabModel();
		$data['fab'] = $model->where('fab_ref', $ref)->first();
		Fabricant::view("modifier", $data);
	}
	public function update()  {
		helper(['form', 'url']);
		$model = new fabModel();
		$ref = $this->request->getVar('fabRef');
		$data = [
			'fab_nom' => $this->request->getVar('fabNom'),
			'fab_web'  => $this->request->getVar('fabWeb'),
			'fab_coord'  => $this->request->getVar('fabCoord'),
			];
		$save = $model->update($ref,$data);
		return redirect()->to(base_url('fabricant') );
	}
	public function create()  {
		helper(['form', 'url']);
		$model = new fabModel();
		$data = [
			'fab_ref' => $this->request->getVar('fabRef'),
			'fab_nom' => $this->request->getVar('fabNom'),
			'fab_web'  => $this->request->getVar('fabWeb'),
			'fab_coord'  => $this->request->getVar('fabCoord'),
			];
		$save = $model->insert($data);
		return redirect()->to(base_url('fabricant') );
	}
	public function delete()  {
		helper(['form', 'url']);
		$model = new fabModel();
		$ref = $this->request->getVar('fabRef');
		$model->delete($ref);
		return redirect()->to(base_url('fabricant') );
	}
	public function index()  {
		Fabricant::lister();
	}
} 

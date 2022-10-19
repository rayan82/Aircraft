<?php

namespace App\Controllers;
use App\Models\utModel;

class Login extends BaseController {

    public function signer() {
        echo view('login');
    }

    public function signIn()
    {
        $session = session();
        $model = new utModel();
        $pseudo = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('ut_pseudo', $pseudo)->first();
        if($data){
            $pass = $data['ut_phrase'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $sessionData = [
                    'ut_pseudo'  => $data['ut_pseudo'],
                    'ut_nom'     => $data['ut_nom'],
                    'ut_prenom'  => $data['ut_prenom'],
                    'ut_mail'  => $data['ut_mail'],
                    'ut_droit'     => $data['ut_droit'],
                    'isLogged'    => TRUE
                ];
                $session->set($sessionData);
                return redirect()->to(base_url('menu') );
            }else{
                $session->setFlashdata('msg', 'Erreur utilisateur ou mot de passe');
                return redirect()->to(base_url('login'));
            }
        }else{
            $session->setFlashdata('msg', 'Erreur utilisateur ou mot de passe');
            return redirect()->to(base_url('login'));
        }
    }
  
    public function signOut()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }

}

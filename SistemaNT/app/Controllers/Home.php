<?php

namespace App\Controllers;

use App\Models\miModelo;

class Home extends BaseController
{
    protected $datos=null;

    public function __construct(){
        $this->datos= new miModelo();
    }
    public function index(): string
    {
        return view('layouts/header').view('saludo').view('layouts/footer');
    }

    public function usuarios(){
        $usuarios = $this->datos->selectUsuarios();

        $usu= array('u'=>$usuarios);

        return view('layouts/header').view('usuarios/user',$usu).view('layouts/footer');
    }

    public function buscarU(){

        if(isset($_POST['uId'])){

            $id=$_POST['uId'];

            $usuId= $this->datos->selectBuscarU($id);
            $usuT= $this->datos->selectUsuarios();

            $usu['uId']= $usuId;
            $usu['u']= $usuT;

            return view('layouts/header').view('usuarios/buscarU',$usu).view('layouts/footer');
        }else{

            $usuarios = $this->datos->selectUsuarios();

            //$usu= array('usuarios'=>$usuarios);
            $usu['u']=$usuarios;
            $usu['uId']="";

            return view('layouts/header').view('usuarios/buscarU',$usu).view('layouts/footer');
            
        }
    }
}

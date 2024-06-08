<?php

use system\RESTful\ResourceController;

class restUser extends ResourceController
{
    protected $modelName = 'App\Models\miModelo';
    protected $format    = 'json';

    public function index()
    {
        return $this->genericResponse($this->model->selectUsuarios(),"",200);
    }

    public function suma(){
        $n1=$_REQUEST['n1'];
        $n2=$_REQUEST['n2'];
        $suma;

        if(is_numeric($n1)&& is_numeric($n2)){
            $suma=intval($n1)+intval($n2);
            $arr=['msg'=>$suma,
                        'code'=>200];
        }else{
            $arr=['msg'=>"Formato numerico no valido",
                        'code'=>500];
        }

        echo json_encode($arr);
    }
}


?>
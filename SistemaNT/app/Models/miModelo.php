<?php

namespace App\Models;

use CodeIgniter\Model;

class miModelo extends Model{

    protected $db=null;

    public function __construct(){
        $this->db= \Config\Database::connect();
    }

    public function selectUsuarios(){
        $consulta= $this->db->table('tbl_usuario u');

        $consulta->select('u.usu_id, u.usu_usuario, u.usu_estado,d.dap_nombres, d.dap_correo, d.dap_cedula');
        $consulta->join('tbl_datosp d','d.dap_id=u.dap_id');
        $consulta->where('u.usu_estado',1);

        $query= $consulta->get();

        $respuesta= $query->getResultArray();

        return $respuesta;
    }

    public function selectBuscarU($id){
        $consulta= $this->db->table('tbl_usuario u');

        $consulta->select('u.usu_id, u.usu_usuario, u.usu_estado,d.dap_nombres, d.dap_correo, d.dap_cedula');
        $consulta->join('tbl_datosp d','d.dap_id=u.dap_id');
        $consulta->where('u.usu_estado',1);
        $consulta->where('u.usu_id',$id);

        $query= $consulta->get();

        $respuesta= $query->getResultArray();

        return $respuesta;

    }
}


?>
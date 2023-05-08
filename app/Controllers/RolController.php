<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RolModel;

class RolController extends BaseController
{
    public function getRoles()
    {
        $db_rol = new RolModel();
        $lista = $db_rol->findAll();
        print_r($lista);
    }

    public function getRolesById($id)
    {
        $db_rol = new RolModel();
        $resultado = $db_rol->find($id);
        print_r($resultado);
    }

    public function saveRol()
    {
        $results = array();
        $db_rol = new RolModel();
        $data = [
            'rol'            => 'Admin',
            'descripcion'    => 'Rol para administradores',
            'estado'         => 'A',
        ];
        
        $valor = $db_rol->insert($data);
        $result = [
            'id'        => $valor,
            'record'    => $db_rol->getInsertID()
        ];
        array_push($results, $result);

        $data = [
            'rol'            => 'RRHH',
            'descripcion'    => 'Rol para recursos humanos',
            'estado'         => 'A',
        ];
        $valor = $db_rol->insert($data);
        $result = [
            'id'        => $valor,
            'record'    => $db_rol->getInsertID()
        ];
        array_push($results, $result);

        $data = [
            'rol'            => 'General',
            'descripcion'    => 'Rol para uso general',
            'estado'         => 'I',
        ];
        $valor = $db_rol->insert($data);
        $result = [
            'id'        => $valor,
            'record'    => $db_rol->getInsertID()
        ];
        array_push($results, $result);

        print_r($results);
    }

    public function updateRol($id)
    {
        $db_rol = new RolModel();
        $data = [
            'rol'            => 'Cajero',
            'descripcion'    => 'Rol para cajeros',
            'estado'         => 'A',
        ];
        $resultado = $db_rol->update($id, $data);
        print_r(["id" => $id, "update" => $resultado]);
    }

    public function deleteRol($id)
    {
        $db_rol = new RolModel();
        $resultado = $db_rol->delete($id);
        print_r(["id" => $id, "delete" => $resultado]);
    }
}

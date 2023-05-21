<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InicioSesion extends BaseController
{
    public function mostrarInicioSesion()
    {
        return view("inicio_sesion");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use Illuminate\Support\Facades\Http;
use App\Usuario;
class UsuarioController extends Controller
{
    //
    public function Registro(RegistroRequest $request)
    {
        $dni = $request->input("dni");
        $cui = $request->input("cui");
        $urlEnpoint = "https://dni.optimizeperu.com/api/persons/{$dni}";
        $data = Http::get($urlEnpoint);
        if ($cui === $data['cui']) {
            $usuario = new Usuario();
            $usuario->dni = $request->input("dni");
            $usuario->nombre = $data['name'];
            $usuario->primer_apellido = $data['first_name'];
            $usuario->segundo_apellido = $data['last_name'];
            $usuario->cui = $data['cui'];
            $usuario->fecha_reg = date("Y-m-d");
            $usuario->save();
            return response()->json([
                "status" => 200,
                "message" => "Puede iniciar"
            ],200);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "No Puede iniciar"
            ], 500);
        }
    }
}

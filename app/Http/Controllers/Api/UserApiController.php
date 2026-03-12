<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReport;
use Illuminate\Http\Request;


use App\Http\Requests\UserApiStore;
use App\Models\Report;
use App\Models\User;

class UserApiController extends Controller
{
   public function registro(UserApiStore $request)
{
    $data = $request->validated();

    $user = User::create($data);

    // asignar rol
    $user->assignRole('ciudadano');

    return response()->json([
        'message' => 'Usuario creado exitosamente'
    ]);
}
    public function createReport(CreateReport $request){
        $date = $request->all();
        $patch = $request->file('img')->store('reportes', 'public');
        $date['img_path']= $patch;
        $date['user_id'] = auth()->user()->id;
        Report::create($date);
        return response()->json([
            'message'=>'Reporte Creado Exitosamente'
        ]);
    }
    public function listarReports(){
        $report = Report::where('user_id', auth()->user()->id)->get();
        return $report;
    }
    public function ubicacionMapa(){
        $report = Report::all();
        return $report;
    }
}

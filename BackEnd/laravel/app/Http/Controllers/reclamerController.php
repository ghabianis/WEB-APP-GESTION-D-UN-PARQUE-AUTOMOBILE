<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reclamerModel;
class reclamerController extends Controller
{
    public function Reclamer(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'pname' => 'required',
            'numcin' => 'required|max:8|min:8',
            'nump' => 'required|max:8|min:8',
            'loacalitation' => 'required',
            'marque' => 'required',
            'model' => 'required',
            'desc' => 'required'
        ]);

        $con = new reclamerModel();
        $con->name = $request->name;
        $con->pname = $request->pname;
        $con->numcin = $request->numcin;
        $con->nump = $request->nump;
        $con->loacalitation = $request->loacalitation;
        $con->marque = $request->marque;
        $con->model = $request->model;
        $con->desc = $request->desc;

        $con->save();
        return response()->json($con);
    }
}

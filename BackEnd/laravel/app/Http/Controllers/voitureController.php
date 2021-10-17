<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voitureModel;
class voitureController extends Controller
{
    public function addVoiture(Request $request)
    {
        $item=[];
        $this->validate($request,[
            'type' => 'required',
            'marque' => 'required',
            'model' => 'required',
            'status' => 'required',
        ]);

        $con = new voitureModel();
        $con->type = $request->type;
        $con->marque = $request->marque;
        $con->model = $request->model;
        $con->status = $request->status;
        $con->save(); 
        
       return $con;
        
            
}

    public function getVoiture(){
        $item =voitureModel::all();
        return $item;
    }
    public function deleteVoiture($id) {
        $data = voitureModel::find($id);
        $data->delete();
      // return response()->json("message","deleted"); 
    }
}

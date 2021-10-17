<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assignationModel;
class assignationController extends Controller
{
    
    public function addassigne(Request $request)
    {
        $item=[];
        $this->validate($request,[
            'name' => 'required|min:2',
            'pname' => 'required|min:2',
            'numcin' => 'required|max:8|min:8',
            'nump' => 'required|max:8|min:8',
            'marque' => 'required',
            'model' => 'required',
            'dater' => 'required|date'
        ]);

        $con = new assignationModel();
        $con->name = $request->name;
        $con->pname = $request->pname;
        $con->numcin = $request->numcin;
        $con->nump = $request->nump;
        $con->marque = $request->marque;
        $con->model = $request->model;
        $con->dater = $request->dater;
       
            $con->save();
            return response()->json($con);
   
    }
    public function suivi(Request $request){
        $item =assignationModel::all();
        return $item;
       
    }
    public function deleteData($id) {
        $data = assignationModel::find($id);
        $data->delete();
      // return response()->json("message","deleted"); 
    }
}

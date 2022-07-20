<?php

namespace App\Http\Controllers;

use App\Models\Output;
use App\Models\System;
use App\Models\Implementation;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class DataController extends Controller
{
    public function index(){
        return array(
            'systems' => System::all(),
            'implementations' => Implementation::all(),
            'outputs' => Output::all()
        );
    }

    public function mainAreaController($areaNumber){
        $areaTitles = [
            1 => 'Mission, Mission, Goals and Objectives',
            2 => 'Faculty',
            3 => 'Curriculum and Instruction',
            4 => 'Support to Students',
            5 => 'Research',
            6 => 'Extension and Community Involvement',
            7 => 'Library',
            8 => 'Physical Plant and Facilities',
            9 => 'Laboratories',
            10 => 'Administration',
        ];

        if(array_key_exists($areaNumber, $areaTitles)){
            return view('area', [
                        'areaNumber' => $areaNumber,
                        'areaTitle' => $areaTitles[$areaNumber],
                        'data' => $this->showByArea($areaNumber),
                ]);
        } else {
            abort(404);
        }
    }

    public function showByArea($area){
        $area = strval($area);
        $result1 = DB::table('systems')->where('area_id', $area)->get();
        $result2 = DB::table('implementations')->where('area_id', $area)->get();
        $result3 = DB::table('outputs')->where('area_id', $area)->get();
        return array(
            'systems' => $result1,
            'implementations' => $result2,
            'outputs' =>$result3
        );
    }


    public function showByParameterId($parameterId){
        $result1 = DB::table('systems')->where('parameter_id', $parameterId)->get();
        $result2 = DB::table('implementations')->where('parameter_id', $parameterId)->get();
        $result3 = DB::table('outputs')->where('parameter_id', $parameterId)->get();
        return array(
            'systems' => $result1,
            'implementations' => $result2,
            'outputs' =>$result3
        );
    }


    public function store(Request $request){
        $formFields = $request->all();
        $targetModel = $request->input('indicator-id');

        // dd($formFields);

        $areaId = $formFields['area_id'];
        $parameterId = $formFields['parameter_id'];
        $title = $formFields['title'];
        $description = $formFields['description'];
        $filesArray = [];

        if(array_key_exists('files', $formFields)){
            $files = $formFields['files'];
            for ($i=0; $i < count($files); $i++) { 
                $filename = $files[$i]->getClientOriginalName();
                $file = $files[$i];
                array_push($filesArray, $filename);
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/files', $filename);
                }
        }   

        $serialized = serialize($filesArray);

        if($targetModel == 0){
            $targetModel = 'systems';
        } else if($targetModel == 1){
            $targetModel = 'implementations';
        } else {
            $targetModel = 'outputs';
        }

        DB::insert('insert into '. $targetModel . ' (area_id, parameter_id, title, description, files) values (?, ?, ?, ?, ?)', [$areaId, $parameterId, $title, $description, $serialized]);

        return Redirect::back()->with('message', 'Indicator added successfully');
    }

    public function destroy(Request $request){
        $targetTable = $request->input('indicator');
        $targetItem = $request->input('itemId');

        $query = DB::table($targetTable)->where('id', $targetItem)->delete();
        return $query;
        // return [$targetItem, $targetTable];
    }

    public function edit(Request $request){
        dd($request->all());
    }
}

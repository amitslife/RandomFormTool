<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Form;
use App\Models\FormController as ModelsFormController;
use App\Models\FormValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function create()
    {
        //
        return view('formcontrol');
    }

    

    public function store(Request $request)
    {
        $c = $request->input('code');
        $codeid=DB::table('codes')->where('value',$c)->first()->id;
        /* var_dump($request->input('code')); */
        $request->session()->forget(['code_id','form_id','totalSections','form_controller_id']);
        $request->session()->put('code_id', $codeid);
        $request->session()->put('form_id', $request->input('form_id'));
        $request->session()->put('totalSections', DB::table('form_fields')->where('form_id',$request->input('form_id'))->max('section'));
         
        $val = Validator::make($request->all(),[
            'code' => 'required|alpha_num|max:8|min:8'
        ]);   
       /*  $request->validate([
            'code' => 'required|alpha_num|max:6|min:6'
        ]); */
        
        $val->after(function($val){
            //$c=$val->getData()['code'];
            if(!Code::chkCode($val->getData()['code']))
            {
                
                
                $val->errors()->add(
                    'code', 'Invalid Mode!'
                );
            }
        });
        
        $val->validate();
        Code::useCode($c);
        $cid = DB::table('codes')->where('value',$c)->first()->id;
        $fc = ModelsFormController::where('form_id',$request->input('form_id'))->where('code_id',$cid)->first();
        

        if(is_null($fc))
        {
            $fc = ModelsFormController::firstOrCreate([
                'form_id' => $request->input('form_id'),
                'code_id' => $cid,
                'attempt' => 1,
                'ip' => $request->ip()
            ]); 
        }
        $request->session()->put('form_controller_id', $fc->id);
        if($fc->status === "ENDED")
        {
            $request->session()->put('preview', "on");
        }
        return view('formcontrol', [
            'code' => $c,
            'form' => Form::find($request->input('form_id')),
            'status' => $fc->status
        ]);
    }
    public function save(Request $request)
    {
        $section = 0;
        foreach ($request->all() as $key => $field) {
            if($key === '_token')
            {
                continue;
            }
            else if(str_contains($field, ':'))
            {
                $ex = explode(':',$field);
                /* ddd($ex); */
                $exists = FormValue::where('form_field_id',(int)$ex[0])->where('form_controller_id',session()->get('form_controller_id'))->first();
                if($ex[2]==='s')
                {
                    DB::table('form_values')
                        ->updateOrInsert(
                            ['form_field_id' => (int)$ex[0], 'form_controller_id' => session()->get('form_controller_id')],
                            ['fieldNumericValue' => (int)$ex[1]]
                        );
                }
                else if($ex[2]==='r')
                {
                    DB::table('form_values')
                        ->updateOrInsert(
                            ['form_field_id' => (int)$ex[0], 'form_controller_id' => session()->get('form_controller_id')],
                            ['fieldTextValue' => str_replace('_', ' ', $ex[1])]
                        );
                }
                
            }
            else if($key === 'section')
            {
                $section = (int)$field;
                ModelsFormController::find(session()->get('form_controller_id'))->update(['status' => 'section '. $field .' complete']);
            }
            else
            {
                DB::table('form_values')
                    ->updateOrInsert(
                        ['form_field_id' => $key, 'form_controller_id' => session()->get('form_controller_id')],
                        ['fieldTextValue' => $field]
                    );
            }
        }
        if(($section+1) > session()->get('totalSections'))
        {
            return redirect('formcontrol/preview');
        }
        else
        {
            return redirect('formcontrol/fillable/'. ++$section);
        }
        
    }

}

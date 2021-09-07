<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Domain;
use App\Models\FormController;
use App\Models\Form;
use App\Models\FormField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'count_user' => FormController::latest()->count(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_user',
            'title'    => 'Form Entries User'
        ];

        if ($request->ajax()) {
            $q_user = User::select('*')->where('level','!=', 0)->orderByDesc('created_at');
            return Datatables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('layouts.v_template',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formcontrol');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ddd($request);
        $request->validate([
            'code' => 'required|alpha_num|max:6|min:6'
        ]);
        
    }
    /**
     * Process form to be filled for given code
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function processForm(Request $request)
    {
        
        //ddd();
        $form=$request->input('form_id');
        Form::findOrFail($form);
        $codeId = Code::where('value',$request->input('code_id'))->first()->id;
        if($codeId < 0)
        {
            return redirect('/');
        }
        else
        {
            
            //$request->session()->put('form_fields_id', FormField::orderBy('sequence')->orderBy('domain_id')->where('form_id',$form)->with('domain')->get());
        }
        //$fc = FormController::where('form_id',$form);
        /*

                ADD FORM LOADING LOGIC HERE

        */
        // ddd(FormField::orderBy('sequence')->orderBy('domain_id')->where('form_id',$form)->with('domain')->get());
        
        FormController::where('form_id', $form)->where('code_id', $codeId)->update(['status' => 'started']);

        return redirect('/formcontrol/fillable/1');
        /* return view('formcontrol/fillable/1', [
            'code' => $request->input('code_id'),
            'form' => Form::find($request->input('form_id')),
            'form_fields' => FormField::orderBy('sequence')->orderBy('domain_id')->where('form_id',$form)->with('domain')->get()
        ]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormController  $formController
     * @return \Illuminate\Http\Response
     */
    public function show(FormController $formController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormController  $formController
     * @return \Illuminate\Http\Response
     */
    public function edit(FormController $formController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormController  $formController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormController $formController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormController  $formController
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormController $formController)
    {
        //
    }
}

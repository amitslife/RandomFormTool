<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormControllerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Models\Form;
use App\Models\FormController as ModelsFormController;
use App\Models\FormField;
use App\Models\FormValue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){

    return view('landing', [
        'forms' => Form::all()
    ]);
});
Route::get('form/{formid}', function($id){
   
    return view('form', [
        'form' => Form::findOrFail($id)
    ]);
});


Route::post('/formcontrol', [FormController::class, 'store']);
Route::post('/formcontrol/chk', '\App\Http\Controllers\FormControllerController@processForm');
Route::post('forms/formcontrol/save', [FormController::class, 'save']);

Route::post('forms/formcontrol/complete', function(){
    ModelsFormController::find(session()->get('form_controller_id'))->update(['status' => 'ENDED']);
    session()->forget(['code_id','form_id','totalSections','form_controller_id']);
    return view('/message');
});


Route::get('/formcontrol/fillable/{section}', function($section){
    //ddd(!(Session::has('totalSections')));
    if( !(Session::has('totalSections')))
    {
        return redirect('/');
    }
    else
    {
        $p = $section - 1;
        $p = $p > 0 ? ($p / session()->get('totalSections') ) * 100 : 0;
        $fv = ModelsFormController::find( session()->get('form_controller_id'))->formValues;
        //ddd($fv);
        $ff = Form::findOrFail(session()->get('form_id'))->formFields;
        $fvar = array();
        foreach ($ff as $field) {
            $values = $fv->where('form_field_id', $field->id)->all();
            if ($values === [])
            {
                continue;
            }
            
            foreach ($values as $value) 
            {
                switch ($field->fieldControl) 
                {
                    case 'div':
                        continue 2;
                        break;
                        
                    case 'ins':
                        continue 2;
                        break;

                    case 'radiobutton':
                        
                        $fvar[$field->id] = $value->fieldTextValue;
                        break;
                    case 'Textbox':
                        $fvar[$field->id] = $value->fieldTextValue;
                        break;
                    case 'Textarea':
                        $fvar[$field->id] = $value->fieldTextValue;
                        break;
                    case 'scale5':
                        $fvar[$field->id] = $value->fieldNumericValue;
                        break;

                    
                    default:
                        continue 2;
                        break;
                }
            }     
            
        }
        /* ddd(FormField::orderBy('sequence')->where('section',$section)->where('form_id',session()->get('form_id')ddd)->get()); */
        return view('formcontrol/fillable', [
            'form' => Form::findOrFail(session()->get('form_id')),
            'fields' => FormField::orderBy('sequence')->where('section',$section)->where('form_id',session()->get('form_id'))->get(),
            'code' => session()->get('code_id'),
            'section' => $section-1,
            'sections' => session()->get('totalSections'),
            'fieldvals' => $fvar,
            'progress' => $p
        ]);
    }
});

Route::get('/formcontrol/preview', function(){
    if( !(Session::has('form_controller_id')))
    {
        return redirect('/');
    }
    $p = 100;
    /* ddd(FormField::orderBy('sequence')->where('section',$section)->where('form_id',session()->get('form_id')ddd)->get()); */
    
    $fv = ModelsFormController::find( session()->get('form_controller_id'))->formValues;
    $ff = Form::findOrFail(session()->get('form_id'))->formFields;
    $fvar = array();
    foreach ($ff as $field) {
        $values = $fv->where('form_field_id', $field->id)->all();
        if ($values === [])
        {
            continue;
        }
        
        foreach ($values as $value) 
        {
            switch ($field->fieldControl) 
            {
                case 'div':
                    continue 2;
                    break;
                    
                case 'ins':
                    continue 2;
                    break;

                case 'radiobutton':
                    
                    $fvar[$field->id] = $value->fieldTextValue;
                    break;
                case 'Textbox':
                    $fvar[$field->id] = $value->fieldTextValue;
                    break;
                case 'Textarea':
                    $fvar[$field->id] = $value->fieldTextValue;
                    break;
                case 'scale5':
                    $fvar[$field->id] = $value->fieldNumericValue;
                    break;

                
                default:
                    continue 2;
                    break;
            }
        }     
         
    }
    
    return view('formcontrol/preview', [
        'form' => Form::findOrFail(session()->get('form_id')),
        'fields' => $ff,
        //'values' => FormValue::orderBy('form_field_id')->where('form_controller_id', session()->get('form_controller_id'))->with('formfield')->get(),
        'code' => session()->get('code_id'),
        'section' => session()->get('totalSections'),
        'fieldvals' => $fvar,
        'progress' => $p,
        'status' => ModelsFormController::find(session()->get('form_controller_id'))->status
    ]);
});


// Route::get('/', function () {
//     return redirect()->action([HomeController::class, 'index']);
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/entry', [FormControllerController::class, 'index'])->name('formcon.index');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UsersController::class);

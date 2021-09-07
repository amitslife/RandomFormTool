@extends('layouts.app')

@section('content')
    <div class="container-fluid py-20">
    
        <h1 style="text-align:center;">{{ $form->formName }}</h1>

        <div class="col-md-12">
            <div class="col-md-8 table-responsive m-auto">
                <p class="alert alert-info">Please review your responses. You can use the back button to change any responses. If you're satisfied with your responses, 
                    please click 'Complete' to submit your assessment. Once submitted, you cannot make changes to your responses.</p>
                    <table class="table" id="tableUser">
                        <tbody class="text-center">
                            <input type="hidden" id="section" name="section" value="{{ $fields->last()['section'] }}">
                            @foreach ($fields as $field) 
                                                       
                                @switch($field->fieldControl)
                                    @case("div")
                                    <tr>
                                        <td colspan="2">
                                            <div id='{{ $field->fieldName }}'>
                                                <div class="display1-lg">{{ $field->fieldName }}</div>
                                                <div class="fa-paragraph">
                                                    {{ $field->fieldDescription }}
                                                </div>
                                            </div>
                                        </td>                            
                                    </tr>   
                                    @break
                                    @case("radiobutton")
                                        <tr>
                                            <td style="text-align:left;width:15rm" >{{ $field->fieldName }}</td>
                                            <td style="text-align:right">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    
                                {{--                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                                    <button type="button" class="btn btn-outline-secondary">Right</button> --}}
                                                
                                                    @foreach (explode(',', $field->fieldType) as $val)
                                                        @if ($fieldvals[$field->id] === $val)
                                                        <label class="btn btn-outline-success "  style="width:10rm;">
                                                            <input type="radio" disabled checked name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r"> {{ $val }}
                                                        </label>
                                                        @else
                                                        <label class="btn btn-outline-success disabled"  style="width:10rm;">
                                                            <input type="radio" disabled name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r"> {{ $val }}
                                                        </label>
                                                        @endif
                                                        {{-- <label class="btn btn-outline-success">
                                                            <input type="radio" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r"> {{ $val }}
                                                        </label> --}}
                                                        {{-- <input type="radio" class="btn-check" name="{{ $field->id }}" id="{{ $field->id }}{{ $loop->iteration }}" value="{{ $loop->iteration }}" autocomplete="off">
                                                        <label class="btn btn-outline-success" for="{{ $field->id }}{{ $loop->iteration }}">{{ $val }} 1</label>                                             
                                                        <button type="button" class="btn btn-outline-success" style="" name="{{ $field->id }}" value="{{ $loop->iteration }}">{{ $val }}</button> --}}
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    @break
                                    @case("scale5")
                                        <tr>
                                            <td style="text-align:left;width:15rm">{{ $field->fieldName }}</td>
                                            <td style="text-align:right">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    
                                {{--                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                                    <button type="button" class="btn btn-outline-secondary">Right</button> --}}
                                                
                                                    @foreach (explode(',', $field->fieldType) as $val)     
                                                        @if ($fieldvals[$field->id] == $loop->iteration)  
                                                        <label class="btn btn-outline-success align-middle" style="width:10rm;">
                                                            <input type="radio" disabled checked name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s"> {{ $val }}
                                                        </label>
                                                        @else
                                                        <label class="btn btn-outline-success align-middle disabled" style="width:10rm;">
                                                            <input type="radio" disabled name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s"> {{ $val }}
                                                        </label>
                                                        @endif


                                                        {{-- <label class="btn btn-outline-success align-middle" style="width:8rem;">
                                                            <input type="radio" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s"> {{ $val }}
                                                        </label> --}}
                                                        {{-- <input type="radio" class="btn-check" name="{{ $field->id }}" id="{{ $field->id }}{{ $loop->iteration }}" value="{{ $loop->iteration }}" autocomplete="off">
                                                        <label class="btn btn-outline-success" for="{{ $field->id }}{{ $loop->iteration }}">{{ $val }} 1</label>                                             
                                                        <button type="button" class="btn btn-outline-success" style="" name="{{ $field->id }}" value="{{ $loop->iteration }}">{{ $val }}</button> --}}
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    @break
                                    @case("Textbox")
                                        @if ($field->fieldType === "Date")
                                        <tr>
                                            <td style="text-align:left">{{ $field->fieldName }}</td>
                                            <td style="text-align:right">
                                                <input class="form-control" type="date" value="{{ $fieldvals[$field->id] }}" name="{{ $field->id }}">
                                            </td>
                                        </tr>                                       
                                        @endif
                                    @break
                                    @case("ins")
                                    <tr>
                                        <td colspan="2">
                                            <div id='{{ $field->fieldName }}'>
                                                {{-- <div class="display1-lg">{{ $field->fieldName }}</div> --}}
                                                <div class="fa-paragraph">
                                                    {!! $field->fieldDescription !!}  
                                                </div>
                                            </div>
                                        </td>                            
                                    </tr> 
                                    @break
                                    @case("Textarea")
                                    <tr>
                                        <td style="text-align:left">{{ $field->fieldName }}</td>
                                        <td style="text-align:right">
                                            <textarea class="form-control" id="{{ $field->id }}" name="{{ $field->id }}" rows="3">{{ $fieldvals[$field->id] }}</textarea>
                                        </td>
                                    </tr>  
                                    @break
                                    
                                    @default
                                    @break   
                                @endswitch
                                @if ($field->fieldControl === "div")
                                    
                                @endif 
                            @endforeach
                            <tr>
                                
                                @if ($status === "ENDED")

                                    <td colspan="2" style="text-align:center">
                                        
                                        <a href="{{ url('/') }}" class="btn btn-outline-success btn-lg" >Done</a> 
                                    </td>
                                @else
                                    <td style="text-align:left">
                                        <a href="{{ url('/formcontrol/fillable/'.$section) }}" class="btn btn-outline-success btn-lg" >Back</a> 
                                    </td>
                                    <td style="text-align:right">
                                        <form method="POST" action="/forms/formcontrol/complete">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success btn-lg" >Complete</button> 
                                        </form>
                                    </td>   
                                @endif
                                    
                                
                                
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col-md-6 m-auto">
                                        <div class="progress " height="2rem">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
               
            </div>
        </div>
        
    </div>
    
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid py-20">
    
        <p class="text-center display-4">{{ $form->formName }}</p>

        

        <div class="col-md-12">
            <div class="col-md-8 table-responsive m-auto">
                <div class="alert alert-danger" style="display: none" id="val-alert">
                    Please respond to all questions on this page
                </div>
                <form method="POST" action="/forms/formcontrol/save" class="needs-validation" novalidate>
                    @csrf
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
                                            <td style="text-align:left;width:15rm;">{{ $field->fieldName }}</td>
                                            <td style="text-align:right">
                                                <div class=" btn-group btn-group-toggle " data-toggle="buttons">
                                                    
                                                    @if ( !array_key_exists($field->id,$fieldvals))
                                                        @foreach (explode(',', $field->fieldType) as $val) 
                                                            <label class="btn btn-outline-success " style="width:10rm;">
                                                                <input type="radio" class="form-control" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r" required> {{ $val }}
                                                            </label>
                                                        @endforeach
                                                    @else
                                                        @foreach (explode(',', $field->fieldType) as $val) 
                                                            @if ($fieldvals[$field->id] == $val)  
                                                                <label class="btn btn-outline-success align-middle" style="width:10rm;">
                                                                    <input type="radio" checked name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r" required> {{ $val }}
                                                                </label>
                                                            @else
                                                                <label class="btn btn-outline-success align-middle disabled" style="width:10rm;">
                                                                    <input type="radio" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-r" value="{{ $field->id }}:{{ $val }}:r" required> {{ $val }}
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    
                                                </div>
                                                
                                                
                                            </td>
                                        </tr>
                                        
                                    @break
                                    @case("scale5")
                                        <tr>
                                            <td style="text-align:left;width:15rm;">{{ $field->fieldName }}</td>
                                            <td style="text-align:right">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    @if ( !array_key_exists($field->id,$fieldvals))
                                                        @foreach (explode(',', $field->fieldType) as $val)       
                                                            <label class="btn btn-outline-success align-middle" style="width:10rm;">
                                                                <input type="radio" class="form-control" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s" required> {{ $val }}
                                                            </label>
                                                        @endforeach
                                                    @else
                                                        @foreach (explode(',', $field->fieldType) as $val) 
                                                            @if ($fieldvals[$field->id] == $loop->iteration)
                                                                <label class="btn btn-outline-success align-middle" style="width:10rm;">
                                                                    <input type="radio" checked class="form-control" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s" required> {{ $val }}
                                                                </label>
                                                            @else
                                                                <label class="btn btn-outline-success align-middle" style="width:10rm;">
                                                                    <input type="radio" class="form-control" name="{{ $field->id }}" id="{{ $field->id }}-{{ $loop->iteration }}-s" value="{{ $field->id }}:{{ $loop->iteration }}:s" required> {{ $val }}
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                <div class="invalid-feedback">
                                                    Please select atleast 1 of the options above.
                                                </div>
                                            </div>
                                                
                                                
                                            </td>
                                        </tr>
                                        
                                    @break
                                    @case("Textbox")
                                        @if ($field->fieldType === "Date")
                                        @if ( !array_key_exists($field->id,$fieldvals))
                                                <tr>
                                                    <td style="text-align:left">{{ $field->fieldName }}</td>
                                                    <td style="text-align:right">
                                                        <input class="form-control" type="date" value="" name="{{ $field->id }}" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid date.
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td style="text-align:left">{{ $field->fieldName }}</td>
                                                    <td style="text-align:right">
                                                        <input class="form-control" type="date" value="{{ $fieldvals[$field->id] }}" name="{{ $field->id }}" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid date.
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif                                     
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
                                    @if ( !array_key_exists($field->id,$fieldvals))
                                            <tr>
                                                <td style="text-align:left">{{ $field->fieldName }}</td>
                                                <td style="text-align:right">
                                                    <textarea class="form-control" id="{{ $field->id }}" name="{{ $field->id }}" rows="3" required></textarea>
                                                    <div class="invalid-feedback">
                                                        This item cannot be blank. Please type 'NA' if you have nothing to share.
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td style="text-align:left">{{ $field->fieldName }}</td>
                                                <td style="text-align:right">
                                                    <textarea class="form-control" id="{{ $field->id }}" name="{{ $field->id }}" rows="3" required>{{ $fieldvals[$field->id] }}</textarea>
                                                    <div class="invalid-feedback">
                                                        This item cannot be blank. Please type 'NA' if you have nothing to share.
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @break
                                    
                                    @default
                                    @break   
                                @endswitch
                               
                            @endforeach
                            <tr>
                                @if ($fields->last()['section'] > 1)
                                    <td style="text-align:left">
                                        <a href="{{ url('/formcontrol/fillable/'.($section) ) }}" class="btn btn-outline-success btn-lg" >Back</a> 
                                    </td>
                                    <td style="text-align:right">
                                        <button type="submit" class="btn btn-outline-success btn-lg" >Next</button> 
                                    </td>   
                                @else
                                    <td colspan='2' style="text-align:right">
                                        <button type="submit" class="btn btn-outline-success btn-lg" >Next</button> 
                                    </td>      
                                    
                                @endif
                                
                            </tr>
                            <tr>
                                
                                <td colspan="2">
                                <div class="alert alert-danger" style="display: none;text-align:left" id="val-alert2">
                                    Please respond to all questions on this page
                                </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="progress " height="2rem">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');

                            var alert = document.getElementById('val-alert');
                            var alert2 = document.getElementById('val-alert2');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    alert.style.display="block";    
                                    alert2.style.display="block";    
                                }
                                form.classList.add('was-validated');
                            }, false);
                            });
                        }, false);
                        })();
                    </script>
                </form>
                
            </div>
        </div>
        
    </div>
    
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid py-20">
        
        <h1 style="text-align: center;">{{ $form->formName }}</h1>
        <form method="POST" action="../formcontrol">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="text-justify">
                        {!! $form->instructions !!}
                    </div>
                    <br>
                    <p class="text-center alert alert-info h4">
                        Please enter the unique code on your handbook in the below textbox and click the button to begin the assessment
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">

                </div>
                <div class="col-2">
                    @csrf
                    <div class="input-group mb-3  input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ATL-</span>
                        </div>
                        <input type="text" class="form-control" style="text-align:center;" aria-label="code" name="code" id="code" required>
                        <div class="input-group-append">
                            <span class="input-group-text">-2021</span>
                        </div>
                    </div>   
                    <input type="hidden" id="form_id" name="form_id" value="{{ $form->id }}">
                    @error('code')
                        <p class="text-center alert alert-danger text-sm">Invalid Code!</p>
                    @enderror            
                </div>
                <div class="col-5"></div>
            </div>
            <div class="row">
                <div class="col-5">

                </div>
                <div class="col-2 text-center">
                    <button type="submit" class="btn btn-outline-success btn-lg ">Start Form</button>                    
                </div>
                <div class="col-5"></div>
            
            </div> 
        
        </form>
    </div>
@endsection

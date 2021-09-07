@extends('layouts.app')

@section('content')
    <div class="container-fluid py-20">
    
        <p class="text-center display-4">Forms</p>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="tableUser">
                    <thead class="font-weight-bold text-center">
                        <tr>
                            {{-- <th>No.</th> --}}
                            <th>Id</th>
                            <th>Form Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>{{ $form->id }}</td>
                            <td>{{ $form->formName }}</td>
                            
                            <td>
                                
                                @if ($status === "ENDED")
                                    <form method="get" action="./formcontrol/preview">
                                        @csrf
                                        <input type="hidden" id="form_id" name="form_id" value="{{ $form->id }}">
                                        <input type="hidden" id="form_id" name="code_id" value="{{ $code }}">
                                        <button type="submit" class="btn btn-success editUser" >View Survey</button>
                                    </form> 
                                @else
                                    <form method="POST" action="./formcontrol/chk">
                                        @csrf
                                        <input type="hidden" id="form_id" name="form_id" value="{{ $form->id }}">
                                        <input type="hidden" id="form_id" name="code_id" value="{{ $code }}">
                                        <button type="submit" class="btn btn-success editUser" >Start Survey</button>
                                    </form>  
                                @endif
                                
                                
                                {{-- <a class="btn btn-danger deleteUser" >Delete</a> --}}
                            </td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection

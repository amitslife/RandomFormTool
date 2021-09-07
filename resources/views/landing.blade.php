@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div>
            <ul class="list-group-flush">
                @foreach ($forms as $form)
                    <li class="list-group-item"><a href="/form/{{ $form->id }}">{{ $form->formName }}</a></li>
                @endforeach
              </ul>
        </div>
    </div>
@endsection

@extends('layouts.app')


@section('content')
<br>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Sesion Iniciada</div>

                <div class="panel-body">
                   <h1>{{trans('app.welcome',['name'=>$user->name])}}</h1>
                </div>
            </div>
        </div>

@endsection

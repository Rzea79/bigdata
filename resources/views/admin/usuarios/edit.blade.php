@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            {!!Form::open(['route'=>['admin.usuarios.update',$user],'method'=>'PUT'])!!}
            <div class="row form-group">
                <div class="col-sm-6">
                    {!!Form::checkbox('estado',null,$user->estado) !!} Activado 
                </div>
                <div class="col-sm-6">
                    {!!Form::submit('GUARDAR',['class'=>'btnn btn-success'])!!} 
                </div>
 
                <div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 

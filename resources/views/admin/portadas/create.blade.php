@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.portadas.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('frase','Frase') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('frase',null,['clas'=>'form-control']) !!}
            </div>
 
            <div class="row form-group">
                {!!Form::label('link','Link') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('link',null,['clas'=>'form-control']) !!}
            </div>
 
 
            <div class="row form-group">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('orden',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
 
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('descripcion');
</script>
@endsection

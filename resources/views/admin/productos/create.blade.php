@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.productos.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','Slug') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('slug',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','Title') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('title',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','Description') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('description',null,['clas'=>'form-control']) !!}
            </div>
 
            <div class="row form-group">
                {!!Form::label('precio','Precio') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('precio',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('stock',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('orden',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('unidad',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('estado','Estado') !!}
            </div>
            <div class="row form-group">
                {!!Form::checkbox('estado',null) !!}
            </div>
 
 
 
            <div class="row form-group">
                {!!Form::label('nombre','Nombre') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('nombre',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','Descripcion') !!}
            </div>
            <div class="row form-group">
                {!!Form::textarea('descripcion',null,['clas'=>'form-control']) !!}
            </div>
 
            <div class="row form-group">
                {!!Form::file('urlfoto') !!}
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

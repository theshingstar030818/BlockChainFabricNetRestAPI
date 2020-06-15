@extends('layouts.app')

@section('content')
{!! Form::model($esnbc,['url' => route('esnbc-update',['esnbc' => $esnbc->batches_info]) ]) !!} 
    {{ method_field('PATCH') }} 
    @include('esnbcs.form', ['formMode' => 'edit']) 
    {!! Form::submit('Update Esnbc',['class'=>'form-control btn btn-primary btn-submit esnbc-form-edit']) !!} 
{!! Form::close() !!} 
@endsection
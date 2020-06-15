@extends('layouts.app')

@section('content')
{!! Form::model($esnbc, ['url' => route('esnbc-store')]) !!} 
    @include('esnbcs.form', ['formMode' => 'create']) 
    {!! Form::submit('Save Esnbc',['class'=>'form-control btn btn-primary btn-submit esnbc-form-create', 'ajax_validation_url'=>route('esnbc-verifydata')]) !!} 
{!! Form::close() !!}
@endsection

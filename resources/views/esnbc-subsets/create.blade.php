@extends('layouts.app')

@section('content')
{!! Form::model($esnbc_subset, ['url' => route('esnbc-subset-store') ]) !!} 
    @include('esnbc-subsets.form', ['formMode' => 'create', 'batches_info_id' => [null => 'Please Select']]) 
    {!! Form::submit('Save EsnbcSubset',['class'=>'form-control btn btn-primary']) !!} 
{!! Form::close() !!}
@endsection

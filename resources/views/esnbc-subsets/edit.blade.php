@extends('layouts.app')

@section('content')
{!! Form::model($esnbc_subset,['url' => route('esnbc-subset-update',['esnbc_subset' => $esnbc_subset->id]) ]) !!} 
    {{ method_field('PATCH') }} 
    @include('esnbc-subsets.form', ['formMode' => 'edit', 'batches_info_id' => [$esnbc_subset->batches_info_id => $esnbc_subset->batches_info_id]]) 
    {!! Form::submit('Update EsnbcSubset',['class'=>'form-control btn btn-primary']) !!} 
{!! Form::close() !!}
@endsection
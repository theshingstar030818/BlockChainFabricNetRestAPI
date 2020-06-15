<div class="form-group row">
    {!! Form::label('batches_info', 'BATCHESINFO', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        @if($formMode == 'edit')
        {!! Form::text('batches_info', null, ['class'=>'form-control','id'=>'batches_info', 'readonly'=>'readonly']) !!}
        @else
        {!! Form::text('batches_info', null, ['class'=>'form-control','id'=>'batches_info','required'=>'required']) !!}
        @endif
    </div>
</div>
 
<div class="form-group row">
    {!! Form::label('product_id', 'Product ID', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('product_id', null, ['class'=>'form-control','id'=>'product_id','required' => 'required']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('product_name', 'Product Name', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('product_name', null, ['class'=>'form-control','id'=>'product_name','required' => 'required']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('certification', 'Certification', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('certification', null, ['class'=>'form-control','id'=>'certification']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('supplier', 'Supplier', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('supplier', null, ['class'=>'form-control','id'=>'supplier']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('origin', 'Origin', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('origin', null, ['class'=>'form-control','id'=>'origin']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('price', 'Price', ['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::number('price', null, ['min' => '0' ,'class' => 'form-control', 'id' => 'price','required','step' => '0.01']) !!}
    </div>
</div>

<div class="form-group row">
    <!-- {!! Form::label('update_type', 'Update Type', ['class' => 'col-sm-6']) !!} -->
    <div class="col-sm-6">
        {!! Form::hidden('update_type', $formMode == 'edit'?'Update':'Create', ['class'=>'form-control','id'=>'update_type']) !!}
    </div>
</div>

<div class="form-group row">
    <!-- {!! Form::label('is_updated_to_fabric', 'Update Status to Fabric', ['class' => 'col-sm-6']) !!} -->
    <div class="col-sm-6">
        {!! Form::hidden('is_updated_to_fabric', 0, ['class'=>'form-control','id'=>'is_updated_to_fabric']) !!}
    </div>
</div>

<div class="alert alert-danger d-none">
</div>
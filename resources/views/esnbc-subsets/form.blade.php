<div class="form-group row">
    {!! Form::label('id', 'ID' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        @if($formMode == 'edit')
        {!! Form::text('id', null, ['class'=>'form-control','id'=>'id', 'readonly'=>'readonly', 'required']) !!}
        @else
        {!! Form::text('id', null, ['class'=>'form-control','id'=>'id', 'required']) !!}
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('batches_info_id', 'Batch/Lot Number' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::select('batches_info_id', $batches_info_id, null, ['class'=>'form-control select2 batches_info_lst', 'id'=>'batches_info_id', 'required'])  !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('production_date', 'Production Date' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('production_date', null, ['class'=>'form-control datepicker','id'=>'production_date', 'required']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('best_before_date', 'Best Before Date' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('best_before_date', null, ['class'=>'form-control datepicker','id'=>'best_before_date']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('net_weight', 'Net Weight' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('net_weight', null, ['class'=>'form-control','id'=>'net_weight']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('dimensions', 'Dimensions' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('dimensions', null, ['class'=>'form-control','id'=>'dimensions']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('customer_purchase_order_number', 'Customer Purchase Order Number' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('customer_purchase_order_number', null, ['class'=>'form-control','id'=>'customer_purchase_order_number']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('shipment_tracking_number', 'Shipment Tracking Number' ,['class' => 'col-sm-6']) !!}
    <div class="col-sm-6">
        {!! Form::text('shipment_tracking_number', null, ['class'=>'form-control','id'=>'shipment_tracking_number']) !!}
    </div>
</div>

{!! Form::hidden('update_type', $formMode == 'edit'?'Update':'Create', ['class'=>'form-control','id'=>'update_type']) !!}
{!! Form::hidden('is_updated_to_fabric', 0, ['class'=>'form-control','id'=>'is_updated_to_fabric']) !!}
<input type='hidden' class='esnbc-get-batches-info-lst-url' value="{{route('esnbc-get-batches-info-lst')}}"/>
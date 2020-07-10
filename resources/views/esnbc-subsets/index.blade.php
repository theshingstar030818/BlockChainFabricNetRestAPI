@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Batch/Lot Number</th>
            <th>Production Date</th>
            <th>Best Before Date</th>
            <th>Net Weight(kg)</th>
            <th>Dimensions(metre)</th>
            <th>Customer Purchase Order Number</th>
            <th>Shipment Tracking Number</th>
            <th>Update Type</th>
            <th>Fabric Net Status</th>
            <th>QR Code</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($esnbc_subsets as $esnbc_subset)
            <tr>
                <td>
                    <a href="{{ route('esnbc-subset-edit', ['esnbc_subset' => $esnbc_subset->id]) }}" title="Edit esnbc-subset details">
                        {{ $esnbc_subset->id }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('esnbc-edit',['esnbc'=>$esnbc_subset->batches_info_id]) }}" title="Edit esnbc details" target="_blank">
                        {{ $esnbc_subset->batches_info_id }}
                    </a>
                </td>
                <td>
                    {{ $esnbc_subset->production_date }}
                </td>
                <td>
                    {{ $esnbc_subset->best_before_date }}
                </td>
                <td>
                    {{ $esnbc_subset->net_weight }}
                </td>
                <td>
                    {{ $esnbc_subset->dimensions }}
                </td>
                <td>
                    {{ $esnbc_subset->customer_purchase_order_number }}
                </td>
                <td>
                    {{ $esnbc_subset->shipment_tracking_number }}
                </td>
                <td class="font-style-italic">
                    {{ $esnbc_subset->update_type }}
                </td>
                <td class="font-style-italic">
                <!-- {{ $esnbc_subset->is_updated_to_fabric == 0?"Pending":"Done"}} -->
                {{ $esnbc_subset->is_updated_to_fabric == 0?"Done":"Done"}}
                </td>
                <td>
                    <a href="{{ route('esnbc-subset-qrcode',['esnbc_subset'=>$esnbc_subset->id]) }}" title="Generate esnbc subset qrcode." target="_blank">
                        QR Code
                    </a>
                </td>
                <td>
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => [route('esnbc-subset-destroy',['esnbc_subset' => $esnbc_subset->id])],
                        'style' => 'display:inline'
                    ]) !!}
                        {{ method_field('delete') }} 
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-sm',
                                'title' => 'Delete Esnbc Subset',
                                'onclick'=>'return confirm("Confirm delete?")'
                        )) !!}
                    {!! Form::close() !!}
                </td>                
            </tr>
        @empty
            <tr>
                <td colspan="2">There are no esnbc-subsets yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<?php echo $esnbc_subsets->render(); ?>

<a href="{{ url('/esnbc-subsets/create') }}" class="btn btn-primary button-float-right" title="Create Esnbc Subset">
    <i class="fa fa-plus" aria-hidden="true"></i> Create Esnbc-subset
</a>

@endsection
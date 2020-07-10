@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>BATCHESINFO</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Certification</th>
            <th>Supplier</th>
            <th>Origin</th>
            <th>Price</th>
            <th>Update Type</th>
            <th>Fabric Net Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($esnbcs as $esnbc)
            <tr>
                <td>
                    <a href="{{ route('esnbc-edit', ['esnbc' => $esnbc->batches_info]) }}" title="Edit esnbc details">
                        {{ $esnbc->batches_info }}
                    </a>
                </td>
                <td>
                    {{ $esnbc->product_id }}
                </td>
                <td>
                    {{ $esnbc->product_name }}
                </td>
                <td>
                    {{ $esnbc->certification }}
                </td>
                <td>
                    {{ $esnbc->supplier }}
                </td>
                <td>
                    {{ $esnbc->origin }}
                </td>
                <td>
                    {{ $esnbc->price }}
                </td>
                <td class="font-style-italic">
                    {{ $esnbc->update_type }}
                </td>
                <td class="font-style-italic">
                <!-- {{ $esnbc->is_updated_to_fabric == 0?"Pending":"Done"}} -->
                {{ $esnbc->is_updated_to_fabric == 0?"Done":"Done"}}
                </td>
                <td>
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => [route('esnbc-destroy',['esnbc' => $esnbc->batches_info])],
                        'style' => 'display:inline'
                    ]) !!}
                        {{ method_field('delete') }} 
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-sm',
                                'title' => 'Delete Esnbc',
                                'onclick'=>'return confirm("Confirm delete?")'
                        )) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">There are no esnbcs yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<?php echo $esnbcs->render(); ?>

<a href="{{ url('/esnbcs/create') }}" class="btn btn-primary button-float-right" title="Create Esnbc">
    <i class="fa fa-plus" aria-hidden="true"></i> Create Esnbc
</a>

@endsection
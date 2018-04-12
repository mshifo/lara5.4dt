@extends('layouts.demo')


@section('side-menu')
    @include('buttons.partials.menu')
@endsection

@section('title')
    <title></title>
@endsection

@section('content')
   
    <div class="tab-content">
        <div class="active tab-pane fade in" id="demo">
       
            <div class="panel panel-default">
                <div class="panel-body">
                    {!!  $dataTable->table()  !!}
                </div>
            </div>
        </div>
     
     
       
    </div>
@endsection

@push('scripts')
{!! $dataTable->scripts() !!}
@endpush

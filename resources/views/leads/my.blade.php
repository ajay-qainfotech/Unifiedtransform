@extends('layouts.app')
@section('title')
    <h1>{{__('My Leads')}}</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2" id="side-navbar">
                @include('layouts.leftside-menubar')
            </div>
            <div class="col-md-10" id="main-container">
    <table class="table table-striped" id="leads-table">
        <thead>
        <tr>

            <th>{{ __('Title') }}</th>
            <th>{{ __('Created by') }}</th>
            <th>{{ __('Deadline') }}</th>

        </tr>
        </thead>
    </table>
    </div>
    </div>
    </div>
@stop

@push('scripts')
<script>
    $(function () {
        $('#leads-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('leads.mydata') !!}',
            columns: [

                {data: 'titlelink', name: 'title'},
                {data: 'user_created_id', name: 'user_created_id'},
                {data: 'contact_date', name: 'contact_date',},

            ]
        });
    });
</script>
@endpush

@extends('layouts.app')
@section('title')
    <h1>{{ __('Create lead') }}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" id="side-navbar">
                @include('layouts.leftside-menubar')
            </div>
            <div class="col-md-10" id="main-container">

    {!! Form::open([
            'route' => 'leads.store'
            ]) !!}

    <div class="form-group">
        {!! Form::label('title', __('Title'), ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', __('Description'), ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-inline">
        <div class="form-group col-lg-3 removeleft">
            {!! Form::label('status', __('Status'), ['class' => 'control-label']) !!}
            {!! Form::select('status', array(
            '1' => 'Contact Client', '2' => 'Completed'), null, ['class' => 'form-control'] )
         !!}
        </div>
        <div class="form-group col-lg-4 removeleft">
            {!! Form::label('contact_date', __('Deadline'), ['class' => 'control-label']) !!}
            {!! Form::date('contact_date', \Carbon\Carbon::now()->addDays(7), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-lg-5 removeleft removeright">
            {!! Form::label('contact_time', __('Time'), ['class' => 'control-label']) !!}
            {!! Form::time('contact_time', '11:00', ['class' => 'form-control']) !!}
        </div>

    </div>


    <div class="form-group">
        {!! Form::label('user_assigned_id', __('Assign user'), ['class' => 'control-label']) !!}
        {!! Form::select('user_assigned_id', $users, null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit(__('Create new Lead'), ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    </div>
        </div>
    </div>s
@stop

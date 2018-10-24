@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
    <h2>Create Forum Cat</h2>
    {!! Form::bsOpen($row,'store') !!}
    {!! Form::bsText('title',null,['required'=>'required']) !!}
    {!! Form::bsText('subtitle') !!}
    {!! Form::bsTextarea('txt') !!}
    {{ Form::bsSubmit(__($view.'.submit'),null,['class'=>"btn theme-btn"]) }}
    {!! Form::close() !!}
@endsection
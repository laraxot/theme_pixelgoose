@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
    <h2>Edit Forum Post</h2>
    {!! Form::bsOpen($row,'update') !!}
    {!! Form::bsText('title',null,['required'=>'required']) !!}
    {!! Form::bsText('subtitle') !!}
    {!! Form::bsTextarea('txt') !!}
    {{ Form::bsSubmit(__($view.'.submit'),null,['class'=>"btn theme-btn"]) }}
    {!! Form::close() !!}
@endsection
@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $todo->title; }}</h2>
  <div><p>Starts:{{ $todo->startdatetime; }}</p></div>
  <div><p>Ends:{{ $todo->startdatetime; }}</p></div>
@stop

@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div><p>Starts:{{ $calendar->startdatetime; }}</p></div>
  <div><p>Ends:{{ $calendar->startdatetime; }}</p></div>
@stop

@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div>Starts: <x-adminlte-input name="startdatetime" type="datetime-local" label="Start date and time" value="{{date('Y-m-d\Th:i',strtotime($calendar->startdatetime));}}" /></div>
  <div>Ends: <x-adminlte-input name="enddatetime" type="datetime-local" label="End date and time" value="{{date('Y-m-d\Th:i',strtotime($calendar->enddatetime));}}" /></div>
  <div><p>Starts:{{date('Y-m-d\Th:i',strtotime($calendar->startdatetime));}}</p></div>
  <div><p>Ends:{{date('Y-m-d\Th:i',strtotime($calendar->enddatetime));}}</p></div>
@stop

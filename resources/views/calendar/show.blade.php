@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div>Starts: <x-adminlte-input name="startdatetime" id="startdatetime" type="datetime-local" label="Start date and time" value="" /></div>
  <div>Ends: <x-adminlte-input name="enddatetime" id="enddatetime" type="datetime-local" label="End date and time" value="" /></div>
@stop

@section('js')
<script>
$( document ).ready(function() {
    var start = new Date("{{date('Y-m-d\Th:i',strtotime($calendar->startdatetime));}}").toISOString();
    var end = new Date("{{date('Y-m-d\Th:i',strtotime($calendar->enddatetime));}}").toISOString();
    document.getElementById("startdatetime").value=start.substring(0, start.indexOf(':', start.indexOf(':')+1));
    document.getElementById("enddatetime").value=end.substring(0, end.indexOf(':', end.indexOf(':')+1));
})
</script>
@stop

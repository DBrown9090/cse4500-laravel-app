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
    var start = new Date("{{date('Y-m-d\Th:i',strtotime($calendar->startdatetime));}}");
    var end = new Date("{{date('Y-m-d\Th:i',strtotime($calendar->enddatetime));}}");
    document.getElementById("startdatetime").value=start.toISOString();
    document.getElementById("enddatetime").value=end.toISOString();
})
</script>
@stop

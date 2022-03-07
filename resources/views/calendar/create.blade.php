@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar Creation</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="offset" id="hiddenoffsetinput" type="hidden" />
    <x-adminlte-input name="startdatetime" type="datetime-local" label="Start date and time" />
    <x-adminlte-input name="enddatetime" type="datetime-local" label="End date and time" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
<script>
$( document ).ready(function() {
    let d = new Date();
    document.getElementById("hiddenoffsetinput").value = (-1)*(d.getTimezoneOffset() / 60);
})
</script>
@stop

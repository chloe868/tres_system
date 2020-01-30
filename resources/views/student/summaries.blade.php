@extends('student.layout')
<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@foreach($students as $scholars)


@endforeach


<div style="margin-top:10%"> 
@foreach($batchdatas as $bdata)

<a href="{{url('summarybatch',$scholars->batch)}}"><button class="btn btn-primary">Batch {{$bdata}}</button>
@endforeach
</div>


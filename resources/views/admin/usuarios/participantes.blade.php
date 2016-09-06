@extends('layouts.admin')

@section('content')
    @foreach($participantes as $participante)
        {{$participante}}
    @endforeach
@endsection
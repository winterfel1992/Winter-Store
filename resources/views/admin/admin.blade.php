@extends('layouts.app')

@section('content')
    <admin users="{{ $users }}"></admin>
   {{-- <example-component></example-component> --}}
    {{-- <div id="app">
        <admin></admin>
    </div> --}}
@endsection

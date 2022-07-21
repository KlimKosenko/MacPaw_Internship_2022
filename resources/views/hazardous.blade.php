@extends('layout.main')
@section('content')
<div>
    <b>Небезпечні об'єкти навколо землі за останні 3 дні</b>
    <pre>{{$hazardousAsteroidsJson}}</pre>
</div>
@endsection

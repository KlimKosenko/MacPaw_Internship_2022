@extends('layout.main')
@section('content')
<div>
    <b>Космічні об'єкти навколо землі за останні 3 дні, відсортовані за швидкістю</b>
    <pre>{{$asteroidsJson}}</pre>
</div>
@endsection

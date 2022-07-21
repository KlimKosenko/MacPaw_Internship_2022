@extends('layout.main')
@section('content')
<div>
    <p>Кількість знайдених космічних об'єктів біля землі за 3 дні: {{$nearEarthObjectsCount}}</p>
    <p>Кількість доданих об'єктів до бази даних: {{$addedObjects}}</p>
</div>
@endsection

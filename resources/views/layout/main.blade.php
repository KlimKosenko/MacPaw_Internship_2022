<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MacPaw Internship 2022!</title>
</head>
<body>
<ul>
    <li>
        <a href={{route('asteroid.index')}}> Головна сторiнка</a>
    </li>
    <li>
        <a href={{route('asteroid.add')}}> Додати космічні обє'кти з nasaApi в базу даних</a>
    </li>
    <li>
        <a href={{route('asteroid.viewHazardous')}}> Переглянути небезпечні об'єкти</a>
    </li>
    <li>
        <a href={{route('asteroid.orderBySpeed').'?hazardous=true'}}> Переглянути небезпечні об'єкти відсортовані за швидкістю</a>
    </li>
    <li>
        <a href={{route('asteroid.orderBySpeed')}}> Переглянути космічні об'єкти відсортовані за швидкістю</a>
    </li>
</ul>

@yield('content')

</body>
</html>

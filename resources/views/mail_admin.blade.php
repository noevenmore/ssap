<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Кропивницький</title>
</head>
<body>
    <p>Доброго дня! Було замовлено екскурсію: <a href="{{route('excursion',$excursion->id)}}">{{$excursion->name}}</a></p> 

    <p>Данні замовлення:</p>
    <p><strong>Ім'я:</strong> {{$request->name}}</p>
    <p><strong>Пошта:</strong> {{$request->email}}</p>
    <p><strong>Телефон:</strong> {{$request->phone}}</p>
    <p><strong>Кількість людей:</strong> {{$request->people_count}}</p>
    <p><strong>Дата:</strong> {{$request->date}}</p>
</body>
</html>
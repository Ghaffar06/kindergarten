<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<p1>List Of Letters Section!</p1>
<br>
<br>
<p3>operations:</p3>
<br>
<div>
    press on button to open it's photos
    <br>
    @for($c = 'a' ; $c != 'aa' ; $c ++)
        <button onclick="window.location.replace('{{route('letter.index' , ['letter' => $c])}}')">{{$c}}</button>

    @endfor
    <br>
    @for($c = 'A' ; $c != 'AA' ; $c ++)
        <button onclick="window.location.replace('{{route('letter.index' , ['letter' => $c])}}')">{{$c}}</button>
    @endfor
</div>

</html>

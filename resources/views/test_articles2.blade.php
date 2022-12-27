<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
<p1>Articles Section!</p1>
<br>
<br>

<div>
    <p3>add new article:</p3>
    <form action="{{route('article.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">title: </label>
        <input type="text" name="title">
        <br>
        <label for="text">text: </label>
        <input type="text" name="text">
        <br>

        <label for="question1">question1: </label>
        <input type="text" name="question1">
        <input type="checkbox" name="answer1">
        <br>
        <label for="question2">question2: </label>
        <input type="text" name="question2">
        <input type="checkbox" name="answer2">
        <br>
        <label for="question3">question3: </label>
        <input type="text" name="question3">
        <input type="checkbox" name="answer3">
        <br>
        <label for="question4">question4: </label>
        <input type="text" name="question4">
        <input type="checkbox" name="answer4">
        <br>

        <button type="submit">Submit</button>
        <br>
    </form>
</div>
<br>
<p3>operations:</p3>
<br>
<br>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</body>
</html>

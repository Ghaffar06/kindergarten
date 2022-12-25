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
<p1>Single Articles Section!</p1>
<br>
<br>
<div>
    Title:: {{$article->title}}
    <br>
    Hole Text:: {{$article->text}}
    <br>
    ID:: {{$article->id}}
    <br>
    Writer_ID:: {{$article->user_id}}
    <br>
    Max Score (if child):: {{$article->score}}
    <br>
    @if($article->last_score !== null)
        Last Score:: {{$article->last_score}}
        <br>
    @endif
    Questions:
    <br>
    <form action="{{route('article.single_article_validate' , ['id'=>$article->id])}}" method="post">
        @csrf
        @foreach($article->articleQuestions as $question)
            {{$question->option}} [[{{$question->answer}}]]
            @if($question->flag != null)
                <input type="checkbox" name="{{$question->id}}" checked>
            @else
                <input type="checkbox" name="{{$question->id}}">
            @endif
            <br>
        @endforeach
        <input type="submit">
    </form>

    <br><br>

</div>
</body>
<script>

</script>
</html>

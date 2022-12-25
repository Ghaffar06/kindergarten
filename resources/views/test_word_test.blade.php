<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p1>Test Word Section!</p1>
<br>
<br>
<div>
    <br>
    Voice Questions:::
    <br><br>
    @foreach($voiceQuestions as $key=> $question)
        {{$question}}
        <br>
        <br>
    @endforeach
    <br>
    <br>
    Photo Questions:::
    <br><br>
    @foreach($photoQuestions as $key=> $question)
        choose corresponding photo to [{{$question->text}}]
        <br>
        @foreach($question->photos as $photo)
            correct? {{$photo->correct ? "True" : "False"}} , url: {{$photo->url}}
            <br>
        @endforeach
        <br>
    @endforeach

</div>
<p3>operations:</p3>
<br>
<br>
<br>

<script>

</script>

</html>

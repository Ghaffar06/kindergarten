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
<p1>Learning Word Section!</p1>
<br>
<br>
<div>
    <br>

    {{$word}}
    <br>
    <br>
    photo of word:
    <br>
    @foreach($word->wordPhotos as $photo)
        {{$photo}}
        <br>
    @endforeach
    <br>
    <br>

    voice of word:
    <br>
    @foreach($word->wordVoiceRecords as $voice)
        {{$voice}}
        <br>
    @endforeach
    <br>

</div>
<p3>operations:</p3>
<br>
<div>
    <br>
    current index: {{$index}}
    <br>
    <br>
    number of total words: {{$total}}
    <br>
    <br>
    <button onclick="getPrev()">get previous word</button>
    <br>
    <button onclick="getNext()">get next word</button>
    <br>
</div>

<script>
    function getNext() {
        let url = "{{route('word.learn' , ['index' => ':index'])}}";
        url = url.replace(':index', "{{$index + 1}}");
        window.location.replace(url);
    }
    function getPrev() {
        let url = "{{route('word.learn' , ['index' => ':index'])}}";
        url = url.replace(':index', "{{$index - 1}}");
        window.location.replace(url);
    }
</script>

</html>

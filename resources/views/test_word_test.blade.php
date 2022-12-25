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
    @foreach($voiceQuestions as $question)
        {{$question}}
        <br>
        <br>
{{--        photo of word:--}}
{{--        <br>--}}
{{--        @foreach($word->wordPhotos as $photo)--}}
{{--            {{$photo}}--}}
{{--            <br>--}}
{{--        @endforeach--}}
{{--        <br>--}}
{{--        <br>--}}
{{--    --}}
{{--        voice of word:--}}
{{--        <br>--}}
{{--        @foreach($word->wordVoiceRecords as $voice)--}}
{{--            {{$voice}}--}}
{{--            <br>--}}
{{--        @endforeach--}}
{{--        <br>--}}
    @endforeach
</div>
<p3>operations:</p3>
<br>
<br>
<br>

<script>

</script>

</html>

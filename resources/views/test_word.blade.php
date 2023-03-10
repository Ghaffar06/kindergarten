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
<p1>Category Section!</p1>
<br>
<div>
    all::::
</div>
<br>

<div>
    <p3>add new word:</p3>
    @error('image')
    <br>
    <span class="invalid-feedback" role="alert" style="display: block">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('description')
    <br>
    <span class="invalid-feedback" role="alert" style="display: block">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('title')
    <br>
    <span class="invalid-feedback" role="alert" style="display: block">
{{--            <strong>{{ $message }}</strong>--}}
        </span>
    @enderror


    <form action="{{route('word.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="text">text: </label>
        <input type="text" name="text">
        <br>
        <label for="score">score: </label>
        <input type="text" name="score">
        <br>
        <label for="category1">category1: </label>
        <input type="text" name="category1" class="search-category">
        <br>
        <label for="category2">category2: </label>
        <input type="text" name="category2" class="search-category">
        <br>
        <label for="image1">image1: </label>
        <input type="file" name="image1">
        <br>
        <label for="image2">image2: </label>
        <input type="file" name="image2">
        <br>
        <label for="voice1">voice1: </label>
        <input type="file" name="voice1">
        <br>
        <label for="voice2">voice2: </label>
        <input type="file" name="voice2">
        <br>

        <button type="submit">Submit</button>
        <br>
    </form>
</div>
<br>
<div>
    <p3>all words:</p3>
    @foreach($words as $word)
        <div>
            word <br>
            {{$word}}
            <br>
            photo of word:
            <br>
            {{$word->wordPhotos[0]}}
            <br>
            <br>
            <br>


        </div>
    @endforeach

    <p2>
        pagination:
    </p2>
    <br>
    current page: {{$paginate_words_page}}
    <br>
    last page: {{$paginate_words_last_page}}
    <br>


</div>
<p3>operations:</p3>
<br>
<br>
<div>
    id of word to delete:
    <input type="text" id='id1'>
    <button onclick="deleteWord()">delete!</button>
    <br>
</div>
<br>
<div>
    id of word to display (reviewing):
    <input type="text" id='id11'>
    <button onclick="openWord()">open</button>
    <a hidden href="" id="href-words" target="_blank"></a>
    <br>
    <br>

</div>
<br>
<br>

</body>
<script>
    function deleteWord() {
        let id = document.getElementById('id1').value;
        let url = "{{route('word.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        window.location.replace(url);
    }

    function openWord() {
        let id = document.getElementById('id11').value;
        let url = "{{route('word.learn' , ['category'=>':category' , 'id'=>':id'])}}";
        url = url.replace(':id', id);
        url = url.replace(':category', "{{$category}}");
        document.getElementById('href-words').setAttribute('href', url);
        document.getElementById('href-words').click();
    }


</script>

</html>

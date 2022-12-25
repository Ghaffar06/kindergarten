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
<div>
    <p3>all articles:</p3>
    @foreach($articles as $article)
        <div>
            Title:: {{$article->title}}
            <br>
            Short Text:: {{$article->short}}
            <br>
            ID:: {{$article->id}}
            <br>
            Writer_ID:: {{$article->user_id}}
            <br>
            Max Score (if child):: {{$article->score}}
            <br><br>
        </div>
    @endforeach

    <p2>
        pagination:
    </p2>
    <br>
    current page: {{$paginate_articles_page}}
    <br>
    last page: {{$paginate_articles_last_page}}
    <br>


</div>
<p3>operations:</p3>
<br>
<br>
<div>
    id of article to delete:
    <input type="text" id='id1'>
    <button onclick="deleteArticle()">delete!</button>
    <br>
</div>
<br>
<div>
    id of article to display:
    <input type="text" id='id11'>
    <button onclick="openArticle()">open</button>
    <a hidden="true" href="" id="href-words" target="_blank"></a>
    <br>
    <br>

</div>
<br>

<div>
    search by title of an article:
    <div class="container mt-5">
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control"/>
        </div>
        <button onclick="search()">Search!</button>
    </div>

</div>
<br>

</body>
<script>
    function deleteArticle() {
        let id = document.getElementById('id1').value;
        let url = "{{route('article.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        window.location.replace(url);
    }

    function openArticle() {
        let id = document.getElementById('id11').value;
        let url = "{{route('article.single_article' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        document.getElementById('href-words').setAttribute('href', url);
        document.getElementById('href-words').click();
    }

    function search() {
        let text = document.getElementById('search').value;
        let url = "{{route('article.index')}}";
        window.location.replace(url + "?search=" + text);
    }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script type="text/javascript">
    $('#search').typeahead({
        source: function (query, process) {
            let url = "{{route('article.autocomplete-search')}}";
            return $.get(url, {
                query: query
            }, function (data) {
                var res = [];
                for (d of data)
                    res.push(d.title)
                return process(res);
            });
        }
    });


</script>
</html>

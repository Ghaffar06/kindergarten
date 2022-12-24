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
<br>

<div>
    <p3>add new category:</p3>
    @error('image')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('description')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @error('title')
    <br>
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


    <form action="{{route('category.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">title: </label>
        <input type="text" name="title">
        <br>
        <label for="description">description: </label>
        <input type="text" name="description">
        <br>
        <label for="image">image: </label>
        <input type="file" name="image">
        <br>
        <button type="submit">Submit</button>
        <br>
    </form>
</div>
<br>
<div>
    <p3>all categories:</p3>
    @foreach($categories as $category)
        <div>
            {{$category}}
            <br>
            <img src="{{asset($category->url)}}" alt="photo" width="100px" height="100px">
            <br>
        </div>
    @endforeach
</div>
<p3>operations:</p3>
<br>
<br>
<div>
    id of category to delete:
    <input type="text" id='id1'>
    <button onclick="deleteCategory()">delete!</button>
    <br>
</div>
<br>
<div>
    id of category to display:
    <input type="text" id='id11'>
    <button onclick="openCategory()">open</button>
    <a hidden="true" href="" id="href-words" target="_blank"></a>
    <br>
</div>
<br>

<div>
    search by title of a category:
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
    function deleteCategory() {
        let id = document.getElementById('id1').value;
        let url = "{{route('category.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        window.location.replace(url);
    }

    function openCategory() {
        let id = document.getElementById('id11').value;
        let url = "{{route('category.delete' , ['id'=>':id'])}}";
        url = url.replace(':id', id);
        document.getElementById('href-words').setAttribute('href', url);
        document.getElementById('href-words').click();
    }

    function search() {
        let title = document.getElementById('search').value;
        window.location.replace("{{route('category.index')}}" + "?search=" + title);
    }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script type="text/javascript">
    var route = "{{ route('category.autocomplete-search') }}";
    $('#search').typeahead({
        source: function (query, process) {
            return $.get(route, {
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

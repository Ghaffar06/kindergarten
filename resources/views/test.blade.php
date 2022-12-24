<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>test!</div>
    {{$temp}}

    @if($msg = Session::get('success'))
        <script>
            alert("{{$msg}}");
        </script>
    @endif

    <form action="{{route('category.add')}}" method="post">
        @csrf
        <label for="title">title of category: </label>
        <input type="text" name="title">
        <br>
        <button type="submit">submit</button>
    </form>

    <label> id of category to delete: </label>
    <input type="text" id="id1">
    <button onclick="deleteCategory()">delete!</button>
    <script>
        function deleteCategory() {
            let del = "{{route('category.delete' , ['id'=>':id'])}}";
            let id = document.getElementById('id1').value;
            del = del.replace(':id',id);
            window.location.replace(del);
        }

    </script>
</body>
</html>

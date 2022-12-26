<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<p1>Learning Word Section!</p1>
<br>
<br>
<div>
    <br>

    <'''{{$letter}}'''>
    <br>
    <br>
    photo of letter:
    <br>
    @foreach($photos as $photo)
        {{$photo}}
        <br>
    @endforeach
    <br>
    <br>

</div>
<p3>operations:</p3>
<br>
<div>
    id of photo to delete:
    <input type="text" id='id1'>
    <button onclick="deletePhoto()">delete!</button>
    <br>
    <br>
</div>

<div>
    Add new photo::
    <br>
    <form action="{{route('letter.add' , ['letter' =>$letter])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit">
    </form>

</div>

<script>
    function deletePhoto() {
        let id = document.getElementById('id1').value;
        let url = "{{route('letter.delete' , [ 'letter'=>$letter , 'id'=>':id'])}}";
        url = url.replace(':id', id);
        window.location.replace(url);
    }
</script>

</html>

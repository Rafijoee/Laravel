<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Postingan</title>
    <link href="{{asset ('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset ('css/blog.css')}}" rel="stylesheet">
    <script src="{{asset ('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Ubah Postingan </h1>
    <form method="POST" action="{{url ('posts/->$id')}}" class="form-control">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name= "title" value="{{$post-> title}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content" > {{$post-> content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Simpan !</button>
    </form>
    <form method="POST" action="url('post')">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger"> Hapus </button>
    </form>
</body>
</html>
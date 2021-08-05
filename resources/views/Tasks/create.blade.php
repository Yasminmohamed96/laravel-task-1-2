<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



  <form  method="post"  action="{{ url('/Tasks') }}"  enctype ="multipart/form-data">

     @csrf

     <div class="form-group">
        <label for="exampleInputEmail1">title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      </div>

    <div class="form-group">
        <label for="exampleInputEmail1">title</label>
        <input type="text" name="info" value="{{ old('info') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter info">
      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
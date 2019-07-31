<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
    @endif

    <form methtod="post" action="{{url('sendmail/send')}}">
    
    {{ csrf_field() }}
    <div class="form-group">
        <label>Enter name</label>
        <input type="text" name="name" class="form-control">    
    </div>
    <div class="form-group">
        <label>Enter Email</label>
        <input type="text" name="email" class="form-control">    
    </div>
    <div class="form-group">
        <label>Enter Messege</label>
        <textarea name="message" class="form-control"></textarea>   
    </div>
    <div class="form-group">
        <input type="submit" name="send" value="send" class="btn btn-info" />   
    </div>
    </form>
</body>
</html>
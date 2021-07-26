<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('Style/bootstrap.min.css')}}">
    <title>Document</title>
    <style>
        .message-error{
            color: red;
        }
    </style>
</head>
<body>
<h1 class="text-center">Create aparment</h1>
<div class="container">
    <form action="/aparment/" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" name="name" type="text" placeholder="please enter name">
            @error('name')
            <div class="message-error">
                * {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" name="address" type="text" placeholder="please enter address">
            @error('address')
            <div class="message-error">
                * {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" name="price" type="number" placeholder="please enter price">
            @error('price')
            <div class="message-error">
                * {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" name="information" type="text" placeholder="please enter information">
        </div>
        <div class="form-group">
            <input class="form-control" name="informationDetail" type="text" placeholder="please enter informationDetail">
        </div>
        <div class="form-group">
            <input class="form-control" name="Thumnail" type="text" placeholder="please enter Thumnail">
            @error('Thumnail')
            <div class="message-error">
                * {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" name="status" type="text" placeholder="please enter status">
            @error('status')
            <div class="message-error">
                * {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary col-1">Submit</button>
        </div>
    </form>
</div>
<script src="Scripi/bootstrap.min.js"></script>
<script src="Scripi/jquery.min.js"></script>
</body>
</html>

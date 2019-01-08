@extends('layouts.app')
@section('content')


<html>
<head>
<h1> ADD User </h1>
</head>
<body>


<form action="userAdd" method="POST">
{{ csrf_field() }}

<div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
 <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
</div>
</br>
<div class="form-group{{$errors -> has('name') ? 'has-error' : ''}}">
 <input type="text" name="name" value="{{Request::old('name')}}"  class="form-control" placeholder="NAME" />
</div>
<div class="form-group{{$errors -> has('email') ? 'has-error' : ''}}">
 <input type="text" name="email" value="{{Request::old('email')}}" class="form-control"  placeholder="EMAIL" />
</div>
</br>
<div class="form-group{{$errors -> has('password') ? 'has-error' : ''}}">
 <input type="text" name="password" value="{{Request::old('password')}}" class="form-control"  placeholder="PASSWORD" />
</div>
</br>
<div class="form-group{{$errors -> has('phone') ? 'has-error' : ''}}">
 <input type="text" name="phone" value="{{Request::old('phone')}}" class="form-control"  placeholder="PHONE" />
</div>
</br>
<input type="submit" name="" value="Add User"  class="btn btn-primary" >

<a  class="btn btn-primary" href="/users"> Returne to  Vehicles list  </a>

</form>

</body>
</html>
@endsection

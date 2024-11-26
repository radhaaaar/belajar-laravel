@extends('kalkulator.index')
@section('content')
<h1>{{$title}}</h1>
<form action="{{route('user.update', $user->id)}}" method="post">
    @csrf
    @method('put')
    <label for="">Nama</label>
    <input value="{{$user->name ?? ''}}" type="text" name="name" placeholder="masukan nama anda">
    <br>
    <label for="">email</label>
    <input value="{{$user->email ?? ''}}" type="text" name="email" placeholder="masukan email anda">
    <br>
    <label for="">password</label>
    <input type="password" name="password" placeholder="masukan password anda">
    <br>
    <button>simpan</button>
</form>
@endsection

@extends('kalkulator.index')
@section('content')
<form action="{{route('store-kurang')}}" method="post" style="margin-top:20px">
    @csrf
    <label for="">Angka 1</label>
    <input type="text" name=angka3 placeholder="masukan Angka1">
    <br>
    -
    <br>
    <label for="">Angka 2</label>
    <input type="text" name="angka4" placeholder="masukan Angka2">
    <br>
    <button>proses</button>
</form>
<h3>hasilnya adalah:{{$kurang}} </h3>
@endsection

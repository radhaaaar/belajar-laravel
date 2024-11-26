@extends('kalkulator.index')
@section('content')
<form action="{{route('store-tambah')}}" method="post" style="margin-top:20px">
    @csrf
    <label for="">Angka 1</label>
    <input type="text" name=angka1 placeholder="masukan Angka1">
    <br>
    +
    <br>
    <label for="">Angka 2</label>
    <input type="text" name="angka2" placeholder="masukan Angka2">
    <br>
    <button>proses</button>
</form>
<h3>hasilnya adalah:{{$jumlah}} </h3>
@endsection

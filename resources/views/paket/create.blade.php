@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{$title ?? ''}}</h3>
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama paket</label>
                    <input type="text" class="form-control" placeholder="nama" name="service_name">
                </div>
                <div class="mb-3">
                    <label for="">harga</label>
                    <input type="number" class="form-control" placeholder="harga" name="price">
                </div>
                <div class="mb-3">
                    <label for="">deskripsi</label>
                    <input type="text" class="form-control" placeholder="deskripsi" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
        </div>
    </div>
@endsection

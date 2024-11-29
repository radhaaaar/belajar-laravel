@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{$title ?? ''}}</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama pelanggan</label>
                    <input type="text" class="form-control" placeholder="nama" name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">NO Telepon</label>
                    <input type="number" class="form-control" placeholder="" name="phone">
                </div>
                <div class="mb-3">
                    <label for="">alamat</label>
                    <input type="text" class="form-control" placeholder="deskripsi" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
        </div>
    </div>
@endsection

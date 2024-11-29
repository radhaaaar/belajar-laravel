@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{$title ?? ''}}</h3>
        <div class="card-body">
            <form action="{{ route('customer.update', $customer->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input value="{{ $customer->customer_name }}" type="text" class="form-control" placeholder="Nama" name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">No telepon</label>
                    <input value="{{ $customer->phone }}" type="number" class="form-control" placeholder="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="">alamat</label>
                    <input value="{{ $customer->address }}" type="text" class="form-control" placeholder="alamat" name="address">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

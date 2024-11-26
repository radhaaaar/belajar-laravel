@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">Data Pengguna</h3>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="nama" name="name">
                </div>
                <div class="mb-3">
                    <label for="">email</label>
                    <input type="email" class="form-control" placeholder="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="">password</label>
                    <input type="password" class="form-control" placeholder="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        </div>
        </div>
    </div>
@endsection

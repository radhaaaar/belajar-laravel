@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('trans_order.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">No Transaksi</label>
                            <input type="text" class="form-control" name="order_code" value="{{ $order_code ?? '' }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Laundry</label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                        <div class="mb-3">
                            <label for="">Paket</label>
                            <select name="" id="id_paket" class="form-control">
                                <option value="">--Pilih Paket</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" id="price">
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Nama Pelanggan</label>
                            <select name="id_customer" id="" class="form-control">
                                <option value="">--Pilih Pelanggan--</option>
                                @foreach ($customers as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="order_end_date">
                        </div>
                        <div class="mb-3">
                            <label for="">Qty (Kg)</label>
                            <input type="number" class="qty form-control"  placeholder="Masukan Qty">
                        </div>
                    </div>
                </div>
                <div align="right" class="mb-3">
                    <button class="btn btn-secondary add-row" type="button">Tambah Baris</button>
                </div>
                <div class="table-resposive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">total</td>
                                <td>
                                    <input type="number" class="total-harga form-control" name="total_price" readonly>
                                    <input type="hidden" name="order_status" value="0">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <br>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection

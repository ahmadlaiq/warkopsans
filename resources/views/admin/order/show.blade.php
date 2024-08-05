@extends('admin.layouts.main')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Menu Order</h3>
                    <p class="text-subtitle text-muted">Detail Data Invoice {{ $order->invoice_number }}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Order</li>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title
                            ">Detail Order</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="meja" class="form-label">Meja</label>
                                        <input type="text" class="form-control" id="meja" name="meja"
                                            value="{{ $order->meja->nomor }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="invoice_number" class="form-label">No Invoice</label>
                                        <input type="text" class="form-control" id="invoice_number" name="invoice_number"
                                            value="{{ $order->invoice_number }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_name" class="form-label">Nama Customer</label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name"
                                            value="{{ $order->customer_name }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_request" class="form-label">Customer Request</label>
                                        <textarea class="form-control" id="customer_request" name="customer_request" rows="3" disabled>{{ $order->customer_request }}</textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="total_amount" class="form-label">Total Amount</label>
                                        <input type="text" class="form-control" id="total_amount" name="total_amount"
                                            value="{{ $order->total_amount }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="payment_method" class="form-label">Metode Pembayaran</label>
                                        <input type="text" class="form-control" id="payment_method" name="payment_method"
                                            value="{{ $order->payment_method }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="text" class="form-control" id="status" name="status"
                                            value="{{ $order->status }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hoverable rows start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Tabel Detail Order</h4>
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>MENU</th>
                                            <th>HARGA</th>
                                            <th>JUMLAH</th>
                                            <th>SUBTOTAL</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orderItems as $orderItem)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>{{ $orderItem->menuItem->name }}</td>
                                                <td>{{ $orderItem->price }}</td>
                                                <td>x{{ $orderItem->quantity }}</td>
                                                <td>{{ $orderItem->subtotal }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $orderItem->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $orderItem->id }}"
                                                        tabindex="-1" aria-labelledby="editDataModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editDataModalLabel">Edit
                                                                        Data</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST"
                                                                        action="{{ route('orders.update-order-items', $orderItem->id) }}">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <input type="hidden" id="editId"
                                                                            name="id">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $orderItem->id }}">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            Tidak Ada Data
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Hoverable rows end -->

    </div>
@endsection

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $orderItem->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus item ini?
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('orders.delete-order-item', $orderItem->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

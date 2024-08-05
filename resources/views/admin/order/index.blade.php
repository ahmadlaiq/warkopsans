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
                    <h3>Menu Order</h3>
                    <p class="text-subtitle text-muted">Daftar Data Order</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Hoverable rows start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Tabel Order</h4>
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>MEJA</th>
                                            <th>NO INVOICE</th>
                                            <th>NAMA CUSTOMER</th>
                                            <th>TOTAL</th>
                                            <TH>METODE PEMBAYARAN</TH>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orders as $order)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>{{ $order->meja->nomor }}</td>
                                                <td>{{ $order->invoice_number }}</td>
                                                <td>{{ $order->customer_name }}</td>
                                                <td>{{ $order->total_amount }}</td>
                                                <td class="text-center">{{ $order->payment_method }}</td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <span class="badge bg-warning">Pending</span>
                                                    @elseif ($order->status == 'completed')
                                                        <span class="badge bg-success">Completed</span>
                                                    @else
                                                        <span class="badge bg-danger">Cancelled</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('orders.show', $order->id) }}"
                                                        class="btn btn-sm btn-info">Show</a>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $order->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $order->id }}"
                                                        tabindex="-1" aria-labelledby="editDataModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editDataModalLabel">Edit
                                                                        Data</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST"
                                                                        action="{{ route('orders.update', $order->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="meja"
                                                                                class="form-label">Meja</label>
                                                                            <select class="form-select" id="meja"
                                                                                name="meja_id">
                                                                                @foreach ($mejas as $meja)
                                                                                    <option value="{{ $meja->id }}"
                                                                                        {{ $meja->id == $order->meja_id ? 'selected' : '' }}>
                                                                                        {{ $meja->nomor }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="invoice_number"
                                                                                class="form-label">No
                                                                                Invoice</label>
                                                                            <input type="text" class="form-control"
                                                                                id="invoice_number" name="invoice_number"
                                                                                value="{{ $order->invoice_number }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="customer_name"
                                                                                class="form-label
                                                                                ">Nama
                                                                                Customer</label>
                                                                            <input type="text" class="form-control"
                                                                                id="customer_name" name="customer_name"
                                                                                value="{{ $order->customer_name }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="total_amount"
                                                                                class="form-label">Total
                                                                                Amount</label>
                                                                            <input type="text" class="form-control"
                                                                                id="total_amount" name="total_amount"
                                                                                value="{{ $order->total_amount }}"
                                                                                disabled>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="payment_method"
                                                                                class="form-label">Metode
                                                                                Pembayaran</label>
                                                                            <select class="form-select" id="payment_method"
                                                                                name="payment_method">
                                                                                <option value="cash"
                                                                                    {{ $order->payment_method == 'cash' ? 'selected' : '' }}>
                                                                                    Cash</option>
                                                                                <option value="qris"
                                                                                    {{ $order->payment_method == 'qris' ? 'selected' : '' }}>
                                                                                    QRIS</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="status"
                                                                                class="form-label">Status</label>
                                                                            <select class="form-select" id="status"
                                                                                name="status">
                                                                                <option value="pending"
                                                                                    {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                                                    Pending</option>
                                                                                <option value="completed"
                                                                                    {{ $order->status == 'completed' ? 'selected' : '' }}>
                                                                                    Completed</option>
                                                                                <option value="cancelled"
                                                                                    {{ $order->status == 'cancelled' ? 'selected' : '' }}>
                                                                                    Cancelled</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="customer_request"
                                                                                class="form-label">Customer Request</label>
                                                                            <textarea class="form-control" id="customer_request" name="customer_request" rows="3">{{ $order->customer_request }}</textarea>
                                                                        </div>
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
                                                        data-bs-target="#deleteModal{{ $order->id }}">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            Tidak Ada Data
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    {{ $orders->links() }}
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Hoverable rows end -->

    </div>
@endsection

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $order->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                <form method="POST" action="{{ route('orders.destroy', $order->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

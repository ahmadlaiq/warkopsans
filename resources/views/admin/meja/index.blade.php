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
                    <h3>Menu Meja</h3>
                    <p class="text-subtitle text-muted">Daftar Data Meja</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Meja</li>
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
                            <h4 class="card-title">Tabel Meja</h4>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDataModal">
                                Tambah
                            </button>
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            {{-- <th>QR CODE</th> --}}
                                            <th>NOMOR MEJA</th>
                                            <th>STATUS</th>
                                            <th>CREATED AT</th>
                                            <th>UPDATED AT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($mejas as $meja)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                {{-- <td>
                                                    <div id="qrcode-{{ $meja->id }}"></div>
                                                </td> --}}
                                                <td class="text-center">{{ $meja->nomor }}</td>
                                                <td>
                                                    @if ($meja->status == 'available')
                                                        <span class="badge bg-success">Tersedia</span>
                                                    @else
                                                        <span class="badge bg-danger">Tidak Tersedia</span>
                                                    @endif
                                                </td>
                                                <td>{{ $meja->created_at }}</td>
                                                <td>{{ $meja->updated_at }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $meja->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $meja->id }}"
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
                                                                        action="{{ route('mejas.update', $meja->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="qr_code" value="p">
                                                                        {{-- <div class="mb-3">
                                                                            <label for="name" class="form-label">QR Code</label>
                                                                            <input type="text" class="form-control" id="name" name="qr_code" value="{{ $meja->qr_code }}" required>
                                                                        </div> --}}
                                                                        <div class="mb-3">
                                                                            <label for="nomor" class="form-label">Nomor Meja</label>
                                                                            <input type="text" class="form-control" id="nomor" name="nomor" value="{{ $meja->nomor }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="status" class="form-label">Status</label>
                                                                            <select class="form-select" id="status" name="status" required>
                                                                                <option value="available" {{ $meja->status == 'available' ? 'selected' : '' }}>Tersedia</option>
                                                                                <option value="occupied" {{ $meja->status == 'occupied' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="hidden" id="editId" name="id">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $meja->id }}">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            Tidak Ada Data
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3 gap-2">
                                    {{ $mejas->links() }}
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addDataForm" method="POST" action="{{ route('mejas.store') }}">
                    @csrf
                    <input type="hidden" name="qr_code" value="p">
                    {{-- <div class="mb-3">
                        <label for="name" class="form-label">QR Code</label>
                        <input type="text" class="form-control" id="name" name="qr_code" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Meja</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="available">Tersedia</option>
                            <option value="occupied">Tidak Tersedia</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $meja->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                <form method="POST" action="{{ route('mejas.destroy', $meja->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var tables = @json($mejas); // Mengubah koleksi PHP menjadi JSON yang dapat diakses oleh JavaScript
            
            // Akses array data yang sebenarnya
            var tableData = tables.data;
    
            // Log untuk memastikan data diakses dengan benar
            console.log(tableData);
    
            tableData.forEach(function(meja) {
                new QRCode(document.getElementById("qrcode-" + meja.id), {
                    text: meja.qr_code, // Sesuaikan properti ini dengan struktur data Anda
                    width: 75,
                    height: 75
                });
            });
        });
    </script>
@endpush

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
                    <h3>Menu Review</h3>
                    <p class="text-subtitle text-muted">Daftar Data Review</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                            <h4 class="card-title">Tabel Review</h4>
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
                                            <th>TITLE</th>
                                            <th>DESCRIPTION</th>
                                            <th>TANGGAL MULAI</th>
                                            <th>TANGGAL BERAKHIR</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($promotions as $promotion)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>{{ $promotion->title }}</td>
                                                <td>{{ $promotion->description }}</td>
                                                <td>{{ $promotion->start_date }}</td>
                                                <td>{{ $promotion->end_date }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $promotion->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $promotion->id }}"
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
                                                                        action="{{ route('promotions.update', $promotion->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="title"
                                                                                class="form-label">Title</label>
                                                                            <input type="text" class="form-control"
                                                                                id="title" name="title"
                                                                                value="{{ $promotion->title }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="description"
                                                                                class="form-label">Description</label>
                                                                            <textarea class="form-control" id="description" name="description">{{ $promotion->description }}</textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="start_date"
                                                                                class="form-label">Tanggal
                                                                                Mulai</label>
                                                                            <input type="date" class="form-control"
                                                                                id="start_date" name="start_date"
                                                                                value="{{ $promotion->start_date }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="end_date" class="form-label">Tanggal
                                                                                Berakhir</label>
                                                                            <input type="date" class="form-control"
                                                                                id="end_date" name="end_date"
                                                                                value="{{ $promotion->end_date }}">
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $promotion->id }}">
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
                                    {{ $promotions->links() }}
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
                <form id="addDataForm" method="POST" action="{{ route('promotions.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="name" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Tanggal Berakhir</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $promotion->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                <form method="POST" action="{{ route('promotions.destroy', $promotion->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

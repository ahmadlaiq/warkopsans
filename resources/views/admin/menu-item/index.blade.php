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
                    <h3>Menu Daftar Makanan & Minuman</h3>
                    <p class="text-subtitle text-muted">Daftar Data Makanan & Minuman</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Menu</li>
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
                            <h4 class="card-title">Tabel Daftar Menu</h4>
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
                                            <th>GAMBAR</th>
                                            <th>NAMA</th>
                                            <th>HARGA</th>
                                            <th>CREATED AT</th>
                                            <th>UPDATED AT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($menuItems as $menuItem)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ $menuItem->image }}" alt="{{ $menuItem->name }}"
                                                        class="img-fluid rounded"
                                                        style="width: 75px; height: 75px; object-fit: cover;" loading="lazy">
                                                </td>
                                                <td>{{ $menuItem->name }}</td>
                                                <td>{{ $menuItem->price }}</td>
                                                <td>{{ $menuItem->created_at }}</td>
                                                <td>{{ $menuItem->updated_at }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $menuItem->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $menuItem->id }}"
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
                                                                        action="{{ route('menu-items.update', $menuItem->id) }}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <div class="mb-2 text-center">
                                                                                <img src="{{ $menuItem->image }}" alt="{{ $menuItem->name }}"
                                                                                class="img-fluid rounded"
                                                                                style="width: 150px; height: 150px; object-fit: cover;" loading="lazy">
                                                                            </div>
                                                                            <label for="name" class="form-label">Gambar</label>
                                                                            <input type="file" class="form-control" name="image" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Nama</label>
                                                                            <input type="text" class="form-control" name="name" value="{{ $menuItem->name }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Harga</label>
                                                                            <input type="number" class="form-control" name="price" value="{{ $menuItem->price }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Deskripsi</label>
                                                                            <textarea class="form-control" name="description" rows="5"></textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Kategori</label>
                                                                            <select class="form-select" name="category_id" required>
                                                                                <option value="">Pilih Kategori</option>
                                                                                @foreach ($categories as $category)
                                                                                    <option value="{{ $category->id }}" @if ($menuItem->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $menuItem->id }}">
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
                                    {{ $menuItems->links() }}
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
                <form method="POST" action="{{ route('menu-items.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="name" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="name" name="description" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="name" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Kategori</label>
                        <select class="form-select" name="category_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $menuItem->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                <form method="POST" action="{{ route('menu-items.destroy', $menuItem->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

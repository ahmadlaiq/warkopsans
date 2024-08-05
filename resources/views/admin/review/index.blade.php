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
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAMA CUSTOMER</th>
                                            <th>RATING</th>
                                            <th>COMMENT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($reviews as $review)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>{{ $review->order->customer_name }}</td>
                                                <td>{{ $review->rating }}</td>
                                                <td>{{ $review->comment }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editDataModal{{ $review->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal Edit Data -->
                                                    <div class="modal fade" id="editDataModal{{ $review->id }}"
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
                                                                        action="{{ route('reviews.update', $review->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="rating" class="form-label">Rating</label>
                                                                            <input type="text" class="form-control" id="rating"
                                                                                name="rating" value="{{ $review->rating }}"
                                                                                required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="comment" class="form-label">Comment</label>
                                                                            <input type="text" class="form-control" id="comment"
                                                                                name="comment" value="{{ $review->comment }}"
                                                                                required>
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
                                                        data-bs-target="#deleteModal{{ $review->id }}">
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
                                    {{ $reviews->links() }}
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
<div class="modal fade" id="deleteModal{{ $review->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                <form method="POST" action="{{ route('reviews.destroy', $review->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

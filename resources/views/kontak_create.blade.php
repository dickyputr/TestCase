@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Product</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="nohp">Deskripsi:</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="form-group">
                    <label for="alamat">Gambar:</label>
                        <input id="image" type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
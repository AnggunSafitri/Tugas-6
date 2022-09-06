@extends('template.admin')
@section('base')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                           Tambah Data Produk
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/produk')}}" method="POST">
                            @csrf
                            <div class="form-horizontal">
                              
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk">
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Warna</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Warna" name="warna">
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Stok" name="stok">
                                        </div>
                                    </div>

                                    </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Harga" name="harga">
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-info">Batal</button>
                                    <button class="btn btn-default float-right">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
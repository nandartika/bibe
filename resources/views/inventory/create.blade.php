@extends('template.bar')
@section('title')
    Inventory
@endSection()
@section('css')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection
@section('content')
@section('bodyclass')
    class="c-app flex-row align-items-center"
@endsection
<div class="c-wrapper c-fixed-components">
    @include('template/header')

    <main class=" c-main">
        <div class="fit-layout">

            <div class="card col-lg-12">
                <div class="card-header">Formulir {{ $titleBar }}</div>
                <div class="card-body">

                    {{-- Field nama produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="namaProduk">Nama Produk</label>
                        <div class="col-md-10">
                            <input class="form-control" id="namaProduk" type="text" name="namaProduk"
                                placeholder="Masukkan Nama Produk">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>

                    {{-- Field jenis produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Produk</label>
                        <div class="col-md-10 col-form-label">
                            <div class="form-check">
                                <input class="form-check-input" id="bahan" type="radio" value="bahan" name="jenis">
                                <label class="form-check-label" for="bahan">Bahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="hm" type="radio" value="hm" name="jenis">
                                <label class="form-check-label" for="hm">Home Made</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="hm2hm" type="radio" value="hm2hm" name="jenis">
                                <label class="form-check-label" for="hm2hm">Home Made to Home Made</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="barang" type="radio" value="barang" name="jenis">
                                <label class="form-check-label" for="barang">Barang</label>
                            </div>
                        </div>
                    </div>

                    <div class="addField"></div>

                    {{-- Field jumlah produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="jumlahProduk">Jumlah</label>
                        <div class="col-md-3">
                            <input class="form-control" id="jumlahProduk" type="number" name="jumlahProduk"
                                placeholder="Masukkan Jumlah Produk">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                </div>
            </div>

        </div>
    </main>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    < script >
        console.log("apa");
    var selected = $("input[name='jenis']:checked").val();
    console.log(selected);
    if (selected == "hm") {
        $("#addField").append('<
            input class = "form-control"
            id = "namaProduk"
            type = "text"
            name = "namaProduk"
            placeholder = "Masukkan Nama Produk" > ');

        }
        // $("#jenis").change(function() {
        //             var input = $(this).val();
        //             console.log(input);
        //             if (input == "hm") {
        //                 $("#addField").append('<
        //                     input class = "form-control"
        //                     id = "namaProduk"
        //                     type = "text"
        //                     name = "namaProduk"
        //                     placeholder = "Masukkan Nama Produk" > ');

        //                 }
        //             });

</script>
@endsection

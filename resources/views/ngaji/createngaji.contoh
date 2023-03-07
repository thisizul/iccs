<!-- <h1>create ngaji</h1>
<h1>test create</h1>
<form action="/ngaji/{id}/store" method="POST">
    @csrf($santris as $i)
    <input type="text" name="santri_id" placeholder="santri_id" value="{{$santris->santri_id}}"><br>
    <input type="text" name="nama_santri" placeholder="nama_santri" value="{{$santris->nama_santri}}"><br>
    <input type="text" name="nama_ustad" placeholder="nama_ustad" value="{{Auth::user()->name}}"><br>
    <input type="text" name="jenis_ngaji" placeholder="jenis_ngaji"><br>
    <input type="text" name="halaman" placeholder="halaman"><br>
    <input type="text" name="tanggal" placeholder="tanggal"><br>
    <input type="text" name="status" placeholder="status"><br>
    <input type="submit" value="Submit">
</form> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<form action="/ngaji/{id}/store" method="POST">
    @csrf($santris as $i)
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <h1>create data ngaji</h1>
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="form-outline mb-4">
                                <input input type="text" name="santri_id" placeholder="santri_id" value="{{$santris->santri_id}}" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="nama_santri" placeholder="nama santri" value="{{$santris->nama_santri}}" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="nama_ustad" placeholder="nama wali" value="{{Auth::user()->name}}" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <select class="form-select form-control-lg" type="text" name="jenis_ngaji" placeholder="jenis ngaji" class="form-control form-control-lg">
                                    <option selected>pilih iqro</option>
                                    <option value="iqro 1">iqro 1</option>
                                    <option value="iqro 2">iqro 2</option>
                                    <option value="iqro 3">iqro 3</option>
                                    <option value="iqro 4">iqro 4</option>
                                    <option value="iqro 5">iqro 5</option>
                                    <option value="iqro 6">iqro 6</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="halaman" placeholder="halaman" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <input type="date" name="tanggal" placeholder="tanggal ngaji" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <select class="form-select form-control-lg" type="text" name="status" placeholder="status" class="form-control form-control-lg">
                                    <option selected>status</option>
                                    <option value="lanjut">lanjut</option>
                                    <option value="ulangi">ulanggi</option>
                                </select>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="sumbit">simpan</button>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</section>
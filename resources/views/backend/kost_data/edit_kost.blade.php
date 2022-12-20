<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.body.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.body.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      @include('admin.body.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-sm-flex justify-content-between align-items-center mb-2">
                <h2 class="font-weight-medium text-dark ">Edit Data Kost</h2>
              </div>
              <form action="{{route('kost.update', $editKost->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">

                @csrf
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Kost</label>
                          <input type="text" name="nama" value="{{($editKost->nama)}}" class="form-control" id="nama" placeholder="Apa nama kost ini?" required="">
                        </div>
                        <div class="mb-3">
                          <label for="jenis" class="form-label">Jenis Kost</label>
                          <input type="text" name="jenis" value="{{($editKost->jenis)}}" class="form-control" id="jenis" placeholder="Perempuan / Laki-Laki / Campur" required="">
                        </div>
                        {{-- <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label" name="jenis">Jenis Kost</label>
                                <select class="form-control" required="">
                                  <option value="" selected="">Tambah jenis kost</option>
                                  <option value="perempuan">Perempuan</option>
                                  <option value="laki-laki">Laki-Laki</option>
                                  <option value="campur">Campur</option>
                                </select>
                          </div> --}}
                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <input type="text" name="deskripsi" value="{{($editKost->deskripsi)}}" class="form-control" id="deskripsi" placeholder="Deskripsikan kost anda" required="">
                        </div>
                        <div class="mb-3">
                          <label for="tahun" class="form-label">Tahun Kost Dibangun</label>
                          <input type="number" name="tahun" value="{{($editKost->tahun)}}" class="form-control" id="tahun" placeholder="Kapan kost ini dibangun?" required="">
                        </div>
                        <div class="mb-3">
                          <label for="peraturan" class="form-label">Peraturan Kost</label>
                          <input type="text" name="peraturan" value="{{($editKost->peraturan)}}" class="form-control" id="peraturan" placeholder="Apa saja peraturan yang ada pada kost anda" required="">
                        </div>
                        <div class="mb-3">
                          <label for="fasilitas" class="form-label">Fasilitas Kost</label>
                          <input type="text" name="fasilitas" value="{{($editKost->fasilitas)}}" class="form-control" id="fasilitas" placeholder="Fasilitas apa saja yang ada pada kost anda" required="">
                        </div>
                        <div class="mb-3">
                          <label for="ukuran" class="form-label">Ukuran Kamar</label>
                          <input type="text" name="ukuran" value="{{($editKost->ukuran)}}" class="form-control" id="ukuran" placeholder="Berapa ukuran luas kamar kost" required="">
                        </div>
                        <div class="mb-3">
                          <label for="jumlahkamar" class="form-label">Jumlah Semua Kamar</label>
                          <input type="number" name="jumlahkamar" value="{{($editKost->jumlahkamar)}}" class="form-control" id="jumlahkamar" placeholder="Berapa banyak jumlah kamar kost anda?" required="">
                        </div>
                        <div class="mb-3">
                          <label for="kamarkosong" class="form-label">Jumlah Kamar Tersedia</label>
                          <input type="number" name="kamarkosong" value="{{($editKost->kamarkosong)}}" class="form-control" id="kamarkosong" placeholder="Ada berapa kamar kosong?" required="">
                        </div>
                        <div class="mb-3">
                          <label for="harga" class="form-label">Harga Sewa Per Bulan</label>
                          <input type="number" name="harga" value="{{($editKost->harga)}}" class="form-control" id="harga" placeholder="Berapa harga sewa kost anda dalam satu bulan?" required="">
                        </div>
                        <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <input type="text" name="alamat" value="{{($editKost->alamat)}}" class="form-control" id="alamat" placeholder="Alamat Kost" required="">
                        </div>
                        <div class="mb-3">
                          <label for="photo">Foto Kost</label>
                          <input type="file" name="photo" id="photo" class="form-control"
                          accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mt-3"><img src="" id="output" width="400"></div>
                        <div>
                          <button type="submit" class="btn btn-outline-primary btn-rounded btn-fw mr-2">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin.body.script')
  <!-- End custom js for this page-->

</body>

</html>


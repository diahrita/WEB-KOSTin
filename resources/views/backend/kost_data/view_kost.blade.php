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
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Data Kost</h1>
                <a href="{{route('kost.add')}}" style="float:right;" type="button" class="btn btn-outline-success btn-rounded">Tambah</a>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      
                      <tr>
                        <th>
                          Nama Kost
                        </th>
                        <th>
                          Jenis Kost
                        </th>
                        <th>
                          Deskripsi
                        </th>
                        <th>
                          Tahun Kost Dibangun
                        </th>
                        <th>
                          Peraturan Kost
                        </th>
                        <th>
                          Fasilitas Kost
                        </th>
                        <th>
                          Ukuran Kamar
                        </th>
                        <th>
                          Jumlah Semua Kamar
                        </th>
                        <th>
                          Jumlah Kamar Tersedia
                        </th>
                        <th>
                          Harga Sewa Per Bulan
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Foto Kost
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      @foreach ($allDataKost as $key => $data_kost)
                      <tr>
                        <td>
                          {{$data_kost->nama_kost}}
                        </td>
                        <td>
                          {{$data_kost->jenis_kost}}
                        </td>
                        <td>
                          {{$data_kost->deskripsi}}
                        </td>
                        <td>
                          {{$data_kost->tahun_kost_dibangun}}
                        </td>
                        <td>
                          {{$data_kost->peraturan_kost}}
                        </td>
                        <td>
                          {{$data_kost->fasilitas_kost}}
                        </td>
                        <td>
                          {{$data_kost->ukuran_kamar}}
                        </td>
                        <td>
                          {{$data_kost->jumlah_semua_kamar}}
                        </td>
                        <td>
                          {{$data_kost->jumlah_kamar_tersedia}}
                        </td>
                        <td>
                          {{$data_kost->harga_per_bulan}}
                        </td>
                        <td>
                          {{$data_kost->alamat}}
                        </td>
                        <td>
                          <img src="{{asset($data_kost->photo)}}">
                        </td>
                        <td>
                          <a href="{{route('kost.edit', $data_kost->id)}}"  class="btn btn-outline-primary btn-rounded btn-fw">Edit</a>
                          <a href="{{route('kost.delete', $data_kost->id)}}" id="delete" class="btn btn-outline-danger btn-rounded btn-fw">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
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


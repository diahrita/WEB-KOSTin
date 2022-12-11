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
                <h1 class="card-title">Data Pemilik Kost</h1>
                <a href="{{route('pemilik.add')}}" style="float:right;" type="button" class="btn btn-outline-success btn-rounded">Tambah</a>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Lengkap
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Jenis Kelamin
                        </th>
                        <th>
                          No Telepon
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      @foreach ($allDataPemilik as $key => $pemilik)
                      <tr>
                        <td>
                          {{$key+1}}
                        </td>
                        <td>
                          {{$pemilik->nama}}
                        </td>
                        <td>
                          {{$pemilik->alamat}}
                        </td>
                        <td>
                          {{$pemilik->jenis_kelamin}}
                        </td>
                        <td>
                          {{$pemilik->no_telepon}}
                        </td>
                        <td>
                          <a href="{{route('pemilik.edit', $pemilik->id)}}"  class="btn btn-outline-primary btn-rounded btn-fw">Edit</a>
                          <a href="{{route('pemilik.delete', $pemilik->id)}}" id="delete" class="btn btn-outline-danger btn-rounded btn-fw">Delete</a>
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


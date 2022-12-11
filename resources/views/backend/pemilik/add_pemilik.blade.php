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
      
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Pemilik Kost</h4>
            <form method="post" action="{{route('pemilik.baru')}}" class="forms-sample">
              @csrf
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="textName" class="form-control" id="textNama" placeholder="Nama Lengkap" required data-validation-required-message="This field is required">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="textAddress" class="form-control" id="textNama" placeholder="Alamat" required data-validation-required-message="This field is required">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="controls">
                  <select type="select" name="selectJenis" required class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="number" class="form-control" id="desimal" placeholder="No Telepon" required data-validation-required-message="This field is required">
              </div>
              <button type="submit" class="btn btn-outline-primary btn-rounded btn-fw">Submit</button>
            </form>
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


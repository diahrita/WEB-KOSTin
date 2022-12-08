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
                <h1 class="card-title">Data User Pengguna</h1>
                <button type="button" class="btn btn-outline-success btn-rounded btn-fw" style="float:right;">Tambah</button>
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
                          Email
                        </th>
                        <th>
                          User Type
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      @foreach ($allDataUser as $key => $user)
                      <tr>
                        <td>
                          {{$key+1}}
                        </td>
                        <td>
                          {{$user->name}}
                        </td>
                        <td>
                          {{$user->email}}
                        </td>
                        <td>
                          {{$user->usertype}}
                        </td>
                        <td>
                          <button type="button" class="btn btn-outline-primary btn-rounded btn-fw">Edit</button>
                          <button type="button" class="btn btn-outline-danger btn-rounded btn-fw">Delete</button>
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


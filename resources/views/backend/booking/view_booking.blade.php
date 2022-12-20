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
                <h1 class="card-title">Data Booking</h1>
                {{-- <a href="{{route('booking.add')}}" style="float:right;" type="button" class="btn btn-outline-success btn-rounded">Tambah</a> --}}
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          ID Pemesan
                        </th>
                        <th>
                          Nama Pemesan
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          ID Kost
                        </th>
                        <th>
                          Nama Kost
                        </th>
                        <th>
                          Harga Sewa Kost
                        </th>
                        <th>
                          Foto Kost
                        </th>
                        <th>
                          Status Pembayaran
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      @foreach ($allDataBooking as $key => $booking)
                      <tr>
                        <td>
                          {{$key+1}}
                        </td>
                        <td>
                          {{$booking->user_id}}
                        </td>
                        <td>
                          {{$booking->name}}
                        </td>
                        <td>
                          {{$booking->email}}
                        </td>
                        <td>
                          {{$booking->kost_id}}
                        </td>
                        <td>
                          {{$booking->harga_per_bulan}}
                        </td>
                        <td>
                          {{$booking->photo}}
                        </td>
                        <td>
                          {{$booking->status_pembayaran}}
                        </td>
                        <td>
                          <a href="#"  class="btn btn-outline-primary btn-rounded btn-fw">Edit</a>
                          <a href="#" id="delete" class="btn btn-outline-danger btn-rounded btn-fw">Delete</a>
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


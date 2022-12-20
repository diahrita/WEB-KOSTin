<!DOCTYPE html>
<html lang="en">
	<head>
		@include('home.css')
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		@include('home.header')
<section>
    @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">x</button>
      {{session()->get('message')}}
    </div>
    @endif
</section>

		<div class="page-body-wrapper">
      <section>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">MY CART</h1>
                {{-- <a href="#" style="float:right;" type="button" class="btn btn-outline-success btn-rounded">Tambah</a> --}}
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nama Kost</th>
                        <th>Harga Sewa Per Bulan</th>
                        <th>Foto Kost</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cart as $cart)
                      <tr>
                        <td>
                          {{$cart->nama_kost}}
                        </td>
                        <td>
                          {{$cart->harga_per_bulan}}
                        </td>
                        <td>
                          <img src="{{$cart->photo}}" width="80" height="80">
                        </td>
                        <td>
                          <a href="{{url('/remove_cart', $cart->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" id="delete" class="btn btn-outline-danger btn-rounded btn-fw">Hapus</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <a href="{{url('/booking')}}" style="float:right;" class="btn btn-outline-primary btn-rounded btn-fw">Booking</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
		</div>
		@include('home.footer')
		@include('home.script')
	</body>
</html>
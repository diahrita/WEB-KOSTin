<!DOCTYPE html>
<html lang="en">
	<head>
		@include('home.css')
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		@include('home.header')
		<div class="page-body-wrapper">
      <section>
        <div class="col-sm-4" style="margin: auto; width: 50%">
          <div class="pricing-box">
            <img src="{{$datakost->photo}}" width="200" height="160">
            <h6 class="font-weight-medium title-text">{{$datakost->nama_kost}}</h6>
            <h5 class="text-amount mb-4 mt-2 font-weight-medium">Rp {{$datakost->harga_per_bulan}},-</h5>
            <ul class="pricing-list">
              <li>{{$datakost->jenis_kost}}</li>
              <li>{{$datakost->alamat}}</li>
              <li>{{$datakost->deskripsi}}</li>
              <li>{{$datakost->fasilitas}}</li>
              <li>Ukuran Kamar : {{$datakost->ukuran_kamar}} meter</li>
              <li>Kamar Kosong : {{$datakost->jumlah_kamar_tersedia}}</li>
              <li>Peraturan : {{$datakost->peraturan_kost}}</li>
            </ul>
            <a href="#" class="btn btn-outline-primary">Booking</a>
          </div>
        </div>
      </section>
		</div>
		@include('home.footer')
		@include('home.script')
	</body>
</html>
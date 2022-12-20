<section class="pricing-list" id="plans">
  <div class="container">
    <div class="row" data-aos="fade-up" data-aos-offset="-500">
      <div class="col-sm-12">
        <div class="d-sm-flex justify-content-between align-items-center mb-2">
          <div>
            <h3 class="font-weight-medium text-dark ">Rekomendasi KOSTin</h3>
            <h5 class="text-dark ">Dapatkan "info kos murah" hanya di KOSTin App.</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row"  data-aos="fade-up" data-aos-offset="-300">

      @foreach ($datakost as $datakost)

      <div class="col-sm-4">
        <div class="pricing-box">
          <img src="{{$datakost->photo}}" width="200" height="160" alt="starter">
          <h6 class="font-weight-medium title-text">{{$datakost->nama_kost}}</h6>
          <h5 class="text-amount mb-4 mt-2 font-weight-medium">Rp {{$datakost->harga_per_bulan}},-</h5>
          <ul class="pricing-list">
            <li>{{$datakost->jenis_kost}}</li>
            <li>{{$datakost->alamat}}</li>
            <li>{{$datakost->deskripsi}}</li>
            <li>{{$datakost->fasilitas}}</li>
          </ul>
          <form action="{{url('add_cart', $datakost->id)}}" method="POST">
            @csrf
          <a href="{{url('data_kost_detail', $datakost->id)}}" class="btn btn-outline-primary">Detail</a>
          <input type="submit" href="{{url('booking_kost')}}" class="btn btn-outline-primary" value="Booking">
          </form>
          {{-- <form>
            <input type="submit" value="Tambah ke Keranjang">
          </form> --}}
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>
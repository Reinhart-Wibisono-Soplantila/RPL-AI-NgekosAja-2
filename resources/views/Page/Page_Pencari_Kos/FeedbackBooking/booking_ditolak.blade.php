@extends('Layout.booking_layout') 

@section('main')
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Konfirmasi Penolakan Booking Dari Pemilik Kos</h3>
        <h5>Maaf, booking yang kamu ajukan telah ditolak oleh pemilik kos</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px;">
        <h4 style="font-weight: bold">{{$datas[0]->Nama_kos}}</h4>
        <h3 class="badge" style="background-color: #ffa602">{{$datas[0]->Jenis_kelamin_kamar}}</h3>
        <div class="img-box-a">
          <img src="{{URL::asset('assets/img/Foto Konfirmasi/kos_namira1.jpg')}}" alt="" class="img-a img-fluid" width="35%" />
        </div>

        <!-- Kolom -->
        <div class="kolom mt-3 ms-5 me-5 justify-content-evenly">
          <!-- Biodata Penyewa -->
            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Penyewa:</div>
              <div class="col text-end">{{$datas[0]->Nama}}</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Jenis Kelamin:</div>
              <div class="col text-end">{{$datas[0]->Jenis_kelamin}}</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">No. Telepon</div>
              <div class="col text-end">{{$datas[0]->Nomor_telepon}}</div>
            </div>
            <hr>

            <div class="row">
                <div class="col text-center fw-bold" style="color: red;">Mohon maaf, permintaan anda ditolak oleh pemilik kos dengan alasan berikut: </div>
            </div>

            <div class="row">
                <div class="col text-center fst-italic" >{{$datas[0]->Isi_feedback}} </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Button Back To Home -->
  <div class="d-grid gap-2 col-6 mx-auto">
      <a href="{{url('/')}}" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px;">Kembali Ke Beranda</a>
  </div>
@endsection

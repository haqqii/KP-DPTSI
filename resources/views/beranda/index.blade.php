<!DOCTYPE html>
<html lang="en">

<head>
{{-- <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
  <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> --}}
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  @include('partial.head')
  <style>
    .crop-text-1 {
      -webkit-line-clamp: inherit;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-box-orient: vertical;
    }
    
    .overlay {
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.5);
      overflow: hidden;
      height: 0;
      transition: .5s ease;
      width: 100%;
    }

    .image_area:hover .overlay {
      height: 50%;
      cursor: pointer;
    }

    .form-control {
      position: relative;
      border-radius: 0px;
    }

    /* .text {
      color: #333;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
    } */

    .add_btn {
      position: absolute;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 20px;
      letter-spacing: 1px;
      text-transform: capitalize;
      height: 40px;
      width: 80px;
      background-color: #1878F2;
      color: white;
      border: none;
      cursor: pointer;
      border-bottom: 1px solid #43d6b0;
    }

    table {
      width: 84%;
      border: 1px solid #c0ccda;
      border-radius: 0.313rem;
    }

    td {
      border: 1px solid #c0ccda;
    }

    .btn-run {
      width: 27px;
      height: 27px;
      background: none;
      color: #333;
      border: 1px solid #1878F2;
      border-radius: 100px;
    }

    .btn-ok {
      width: 27px;
      height: 27px;
      background: none;
      color: #333;
      border: 1px solid #AEB84C;
      border-radius: 100px;
    }

    .btn-cancel {
      width: 27px;
      height: 27px;
      background: none;
      color: #333;
      border: 1px solid #535353;
      border-radius: 100px;
    }

    .btn-option {
      width: 27px;
      height: 27px;
      background: none;
      color: #333;
      border: none;
      border-radius: none;
    }

    .btn-its-cancel {
      background-color: #E66F42;
      border-color: #E66F42;
      color: #fff;
    }

    .btn-its-cancel:hover,
    .btn-its-cancel:focus {
      background-color: #E66F42;
      border-color: #E66F42;
      color: #ffffff;
      box-shadow: 0 0.cancel125rem 0.625rem rgb(222, 166, 144);
    }

    .btn-its-cancel:active,
    .btn-its-cancel.active {
      background-color: #D7663B;
      border-color: #D7663B;
    }

  </style>
</head>

<body class="mn-ht-100v d-flex flex-column">
  @include('partial.navbar')

  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body mg-t-60">
      <div class="container pd-x-0" id="content">
        <div class="d-flex align-items-center justify-content-start">
          <h4 class="tx-poppins tx-medium mg-b-0">Beranda</h4>
        </div>
        <div class="row row-sm">
          <div class="col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
            <div class="card bd-0" style="background-image: url(../../assets/img/coverberanda.svg); background-position: bottom center; background-size:cover;">
              <div class="card-body ht-350 pos-relative align-items-center d-flex">
                <div class="pd-10 justify-content-start align-items-center ">
                  <p class="tx-poppins tx-medium tx-white tx-40 tx-md-35 mg-b-10 ">Selamat datang, Rachmita</p>
                  <p class="tx-white tx-md-20">Semoga Harimu Menyenangkan di tempat kerja</p>
                </div>
                <div class="pos-absolute b-40 l-40">
                  <!-- <a href="/profil">
                      <p class="tx-poppins tx-medium tx-white mg-b-0 d-flex align-items-center">Kelola Akun <ion-icon name="arrow-forward" class="mg-l-5 tx-18 mg-b-2"></ion-icon></p>
                    </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
            <div class="card pd-x-30 pd-y-10 bd-0 mg-b-10 mg-md-b-10">
              <div class="card-header bd-0 pd-10 pd-md-y-20 p-20 justify-content-start align-items-center">
                <h5 class="tx-poppins tx-medium mg-b-0">Statistik Mingguan Kasus Covid-19 Dosen dan Tendik ITS</h5>
                <p class="tx-poppins fst-italic text tx-13 tx-md-0">Data hanya untuk kepentingan internal dan tidak untuk disebarluaskan di luar lingkungan ITS</p>
              </div>
              <div class="row">
                <div class="col-xl-6">
                  <div class="row">
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card ">
                          <div class="card-body bg-custom">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media d-flex align-items-center">
                                <img src="../../assets/img/dirawat.svg" class="wd-60 mg-r-30" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 ">Dirawat</p>
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                  <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card ">
                          <div class="card-body bg-custom">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media d-flex align-items-center">
                                <img src="../../assets/img/isoman.svg" class="wd-60 mg-r-25" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">Isolasi Mandiri</p>
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">17</p>
                                  <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card ">
                          <div class="card-body bg-custom ">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media d-flex align-items-center">
                                <img src="../../assets/img/Konfirmasi Aktif.svg" class="wd-60 mg-r-25" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">Konfirmasi Aktif</p>
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">17</p>
                                  <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card ">
                          <div class="card-body bg-custom">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media d-flex align-items-center">
                                <img src="../../assets/img/positif.svg" class="wd-60 mg-r-25" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">Akumulasi Positif</p>
                                  <p class="tx-poppins tx-13 text-center tx-color-01 mg-b-0 crop-text-1">318</p>
                                  <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="row h-100">
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card h-100">
                          <div class="card-body align-items-center d-flex justify-content-center bg-custom">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media-body" style='text-align:center;'>
                                <img src="../../assets/img/sembuh.svg" class="wd-100 mg-r-12" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-20 text-center tx-color-01 mg-b-0 crop-text-1">Sembuh</p>
                                  <p class="tx-poppins tx-20 text-center tx-color-01 mg-b-0 crop-text-1">17</p>
                                  <p class="tx-poppins tx-15  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12 mb-4 mg-b-10">
                      <a href="https://google.com" target="_blank">
                        <div class="card h-100">
                          <div class="card-body align-items-center d-flex justify-content-center bg-custom ">
                            <div class="d-flex justify-content-between px-md-1">
                              <div class="media-body" style='text-align:center;'>
                                <img src="../../assets/img/wafat.svg" class="wd-100 mg-r-12" alt="">
                                <div class="media-body crop-text-1">
                                  <p class="tx-poppins tx-20 text-center tx-color-01 mg-b-0 crop-text-1">Wafat</p>
                                  <p class="tx-poppins tx-20 text-center tx-color-01 mg-b-0 crop-text-1">11</p>
                                  <p class="tx-poppins tx-15  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <blockquote class="blockquote text-right tx-poppins fst-italic text tx-13 tx-md-0">
                <footer class="blockquote-footer"> Sumber: Satuan Tugas Covid-19 ITS per Senin, 14 Maret 2022 08:00 WIB</footer>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="card col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
          <div class="card-header bd-0 pd-md-y-20 justify-content-start align-items-center">
            <h5 class="tx-poppins tx-medium mg-b-0">Daftar Vaksinasi</h5>
            <p class="tx-poppins text tx-13 tx-md-0">Segera daftarkan diri Anda untuk mendaftar vaksinasi booster yang diselenggarakan ITS Disini.</p>
            <a href="https://google.com" class="btn btn-custom btn-lg tx-white">Daftar Vaksinasi</a>
          </div>
        </div>

        <div class="row row-sm">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
            <div class="card bd-0">
              <div class="row">
                <div class="col-md-6 px-3">
                  <div class="card-header bd-0 pd-30 justify-content-space-between align-items-center">
                    <h7 class="tx-poppins tx-medium mg-b-2">Hari ini</h7>
                    <h3 class="tx-poppins tx-medium mg-b-2">Senin, 07 April 2022</h3>
                    <h7 class="tx-poppins tx-medium mg-b-2 ">Pukul 07.00</h7>
                    <p class="card-text">dari pukul 10:44 WIB sampai dengan sekarang pukul 15:58 WIB atau selama total 5 jam 13 menit.</p>
                    <p class="card-text tx-poppins tx-13 mg-b-10">Anda telah mengisi survei kesehatan Harian.</p>
                    <a href="https://google.com" class="btn btn-outline-primary btn-lg tx-medium tx-poppins mg-b-20">
                      <ion-icon name="create-outline" class="tx-16"></ion-icon> Lihat Hasil Survei
                    </a>
                    <div class="container pd-0 pd-b-5">
                      <div class="textContainer float-left">
                        <p class="card-text tx-poppins tx-13 mg-b-0">Realisasi Kerja:</p>
                      </div>
                      <div class="formcheck float-right">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label tx-poppins tx-13" for="flexCheckDefault">
                          Tampilkan RK yang selesai
                        </label>
                      </div>
                    </div>
                    <div class="wrapper mg-b-20">
                      <table id="mytable" class="table-bordered tx-poppins" style="width: 100%;">
                        <tr>
                          <td style="width: 105px; height: 42px;">
                            <div class="pd-l-5 pd-r-5">
                              <button type="button" class="btn-cancel"><i class="iconify" data-icon="mdi:inbox-full" style="color:#535353"></i></button>
                              <button type="button" class="btn-run"><i class="iconify" data-icon="ic:outline-directions-run" style="color:#1878F2"></i></button>
                              <button type="button" class="btn-ok"><i class="iconify" data-icon="bi:check-lg" style="color:#AEB84C"></i></button>
                            </div>
                          </td>
                          <td>
                            <div class="pd-l-13 pd-r-13 align-items-center">
                              membuat ppt
                              <button type="button" class="btn-option float-end" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="iconify" data-icon="iwwa:option" style="color:#9199A7"></i></button>
                              <div class="dropdown-menu">
                                <a href="#delegasi" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale">
                                  <div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify tx-12" data-icon="heroicons-solid:user-group" style="color:#1878F2"></i></div> Delegasi
                                </a>
                                <a href="#subrk" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale">
                                  <div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify tx-12" data-icon="akar-icons:chevron-up" style="color:#1878F2"></i></div> Jadikan Sub RK
                                </a>
                                <a href="#Ubah" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale">
                                  <div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify" data-icon="bxs:edit" style="color:#1878F2"></i></div>Ubah
                                </a>
                                <a href="#Hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale">
                                  <div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify" data-icon="fluent:delete-28-filled" style="color:#1878F2"></i></div> Hapus
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                      <button class="add_btn" type="button" id="add_btn" onclick="addtable()" style="width: 105px; height: 42px;">
                        <ion-icon name="add-outline" class="tx-22 mg-l-3 mt-2 mg-b-2"></ion-icon>
                      </button>
                      <div class="mg-l-30 justify-content-right">
                        <form class="new_item mg-l-75">
                          <input id="myinput" class="form-control mx-auto tx-poppins" style="width: 100%; height: 42px;" type="text" maxlength="50" name="server_input" id="text_field" placeholder="Tambah Realisasi Kerja" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tambah Realisasi Kerja'" />
                        </form>
                      </div>
                    </div>
                    <p class="tx-poppins tx-10 mg-md-l-100 mg-b-0 text-end">TUTUP HALAMAN INI lalu mulai atau lanjutkan pekerjaan Anda,</p>
                    <p class="tx-poppins tx-10 mg-md-l-100 mg-b-10 text-end">atau klik tombol <a class="text-danger">Akhiri Kerja </a></a> di bawah ini untuk mengakhiri sesi kerja.</p>
                    <a href="#klik" class="btn btn-custom btn-lg tx-white tx-poppins float-right mg-b-20" onclick="changebtn()" id="mybtn" value="Mulai Bekerja" style="width: 150; height: 43;"> Mulai Bekerja </a>
                  </div>
                </div>
                <div class="col-sm-6 px-20 pd-t-20 mg-b-10 bd-0">
                  <iframe class="mg-md-l-20" style=" width: 500px; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                  <div class="d-flex justify-content-start">
                    <a href="https://google.com" style="white-space: nowrap;" class="btn btn-outline-primary tx-medium mg-l-20">
                      <ion-icon name="navigate"></ion-icon> Perbaiki Lokasi Otomatis
                    </a>
                    <p class="tx-poppins tx-9 mg-r-40 mg-md-l-40 mg-b-0 text-end">Berdasarkan lokasi pada peta, Anda terlacak sedang berda di luar kantor. Apabila pelacakan tidak akurat, silahkan klik tombol Perbaiki Lokasi Otomatis.</p>
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
          <p class="tx-poppins mg-b-0">Klik <a href="{{ url('/rekapan') }}" class="link-primary">disini</a> untuk melihat daftar lengkap rekap absen harian Anda.</p>
        </div><!-- row -->

        <!-- <div class="card col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
            <div class="card-header bd-0 pd-md-y-20 justify-content-start align-items-center">
                <h5 class="tx-poppins tx-medium mg-b-0">Quick Survey</h5>
                <p class="tx-poppins text tx-14 tx-md-0"> A. Kesesuaian pendapatan yang diterima dalam perhitungan Intensif Kinerja dan TPB di Sistem Qinerja dengan kontribusi/kinerja Bapak/Ibu hasilkan selama setahun ini?</p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        1. Jauh melebihl ekspektasi/harapan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        2. Melebihi ekspetasi/harapan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        3. Sesuai dengan ekpetasi/harapan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        4. Kurang dari ekpetasi/harapan
                    </label>
                  </div>  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        5. Sangat kurang dari ekpetasi/harapan
                    </label>
                  </div>
                  <p class="tx-poppins text tx-14 tx-md-0"> B. Jika ada, masukan/usulan untuk perbaikan terus-menerus untuk penyempurnaan Sistem Qinerja :</p> 
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Opsional">
                  </div>
                </form>  
                <a href="{{ url('/absensi') }}" 
                    id="btn-simpan" class="btn btn-custom btn-lg tx-white float-end">Simpan Jawaban</button>
                </a>         
            </div>
          </div>       -->
      </div><!-- container -->
    </div>
  </div>

  <!-- Modal Section delegasi -->
  <div class="modal fade effect-scale" id="delegasi" style="margin-top :100px;" role="dialog" aria-labelledby="delegasiLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Delegasi Rencana Kerja</h5>
          <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body">
          <p>Delegasikan rencana kerja ... kepada yang lain dengan mengetikan namanya di bawah ini:</p>
          <div class="form-group form-floating">
            <select class="form-select float-left" style="width: 230px;" id="select_user" required>
              <option value="">Pilih salah satu</option>
              {{-- <option value="../beranda/index.php">Mahasiswa</option>
              <option value="../beranda/admin-index.php">Administrator Direktorat Pengembangan Teknologi dan Sistem Informasi</option>
              <option value="../beranda/kadep-index.php">Kadep Departemen Teknik Informatika</option>
              <option value="../beranda/ditmawa-w-index.php">Verifikator Wirausaha Direktorat Kemahasiswaan</option> --}}
            </select>
            <label for="select_user">Pilih Bawahan</label>
            <form class="new_item float-right">
              <input id="myinput" class="form-control mx-auto tx-poppins" style="width: 230px; height: 42px;" type="text" maxlength="50" name="server_input" id="text_field" placeholder="Target Selesai" />
            </form>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
          <input class="btn btn-its-3 tx-poppins tx-medium" type="button" id="goBtn" value="Delegasi">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Section SubRK -->
  <div class="modal fade effect-scale" id="subrk" style="margin-top :100px;" role="dialog" aria-labelledby="subrkLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Jadikan SUB Rencana Kerja</h5>
          <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body">
          <p>Jadikan rencana kerja ... sebagai Sub dari rencana kerja:</p>
          <div class="form-group form-floating">
            <select class="form-select" id="select_user" required>
              <option value="">Pilih salah satu</option>
            </select>
            <label for="select_user">Pilih rencana kerja induk</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
          <input class="btn btn-its-3 tx-poppins tx-medium" type="button" id="goBtn" value="Jadikan SUB">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Section Ubah -->
  <div class="modal fade effect-scale" id="Ubah" style="margin-top :100px;" role="dialog" aria-labelledby="UbahLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Ubah Rencana Kerja</h5>
          <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body">
          <p>Ubah rencana kerja dengan menyunting informasi teks pada kotak isian berikut:</p>
          <div class="form-group form-floating">
            <form class="new_item">
              <input id="myinput" class="form-control mx-auto tx-poppins" style="width: 100%; height: 42px;" type="text" maxlength="50" name="server_input" id="text_field" placeholder="Koreksi ETS" />
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
          <input class="btn btn-its-3 tx-poppins tx-medium" type="button" id="goBtn" value="Ubah">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Section Hapus -->
  <div class="modal fade effect-scale" id="Hapus" style="margin-top :100px;" role="dialog" aria-labelledby="HapusLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Hapus Rencana Kerja</h5>
          <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body">
          <p>Tekan tombol hapus untuk menghapus rencana kerja ... Dan tidak akan ditampilkan lagi oleh sistem</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
          <input class="btn btn-its-cancel tx-poppins tx-medium" type="button" id="goBtn" value="Hapus">
        </div>
      </div>
    </div>
  </div>
  @include('partial.footer')

  @include('partial.script')
  <script>
    $(function() {
      'use strict'

      $('[data-toggle="tooltip"]').tooltip()

      $('.df-example .btn-primary').tooltip({
        template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-secondary').tooltip({
        template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-success').tooltip({
        template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-danger').tooltip({
        template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })


    });
  </script>
  <script>
    function filter1() {
      var input = document.getElementById("search1");
      var filter = input.value.toLowerCase();
      var nodes = document.getElementsByClassName('target1');

      for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
          nodes[i].style.display = "block";
        } else {
          nodes[i].style.display = "none";
        }
      }
    }
  </script>
  <script>
    function filter2() {
      var input = document.getElementById("search2");
      var filter = input.value.toLowerCase();
      var nodes = document.getElementsByClassName('target2');

      for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
          nodes[i].style.display = "block";
        } else {
          nodes[i].style.display = "none";
        }
      }
    }
  </script>
</body>

</html>
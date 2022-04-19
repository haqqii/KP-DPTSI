<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('partial.head')
    <style>
      .crop-text-1 {
        -webkit-line-clamp: inherit;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
      }
      
    </style>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    @extends('partial.navbar')
    @extends('partial.mahasiswa-menu-sidebar')
    @extends('partial.mahasiswa-menu-sidebar-monitor')
    
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
                <div class="card-body ht-350 pos-relative">
                  <div class="pd-10 pd-md-35 justify-content-start align-items-center ">
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
              <div class="card bd-0 mg-b-10 mg-md-b-10">
                <div class="card-header bd-0 pd-md-y-20 justify-content-start align-items-center">
                  <h5 class="tx-poppins tx-medium mg-b-0">Statistik Mingguan Kasus Covid-19 Dosen dan Tendik ITS</h5>
                  <p class="tx-poppins fst-italic text tx-13 tx-md-0">Data hanya untuk kepentingan internal dan tidak untuk disebarluaskan di luar lingkungan ITS</p>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/dirawat.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-20 text-center tx-color-01 mg-b-0 crop-text-1">Dirawat</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
                  </div> 
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/isoman.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">Isolasi Mandiri</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">17</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
                  </div> 
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom ">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/sembuh.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">Sembuh</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">290</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/wafat.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">Wafat</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">11</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/Konfirmasi Aktif.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">Konfirmasi Aktif</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">17</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4 mg-b-10">
                    <a href="https://google.com" target="_blank">
                      <div class="card ">
                        <div class="card-body bg-custom">
                          <div class="d-flex justify-content-between px-md-1">
                            <div class="media d-flex align-items-center">
                            <img src="../../assets/img/positif.svg" class="wd-60 mg-r-25" alt="">
                              <div class="media-body crop-text-1">
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">Akumulasi Positif</p>
                                <p class="tx-poppins tx-15 text-center tx-color-01 mg-b-0 crop-text-1">318</p>
                                <p class="tx-poppins tx-5  text-center tx-color-01 mg-b-0 crop-text-1">(0)</p>
                              </div>
                           </div>  
                          </div>
                        </div>
                      </div>
                    </a>  
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
          
          <div class="card col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30">
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
          </div>      
        </div><!-- container -->
      </div>
    </div>
    @extends('partial.footer')
    
    @extends('partial.script')
    <script>
      $(function(){
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

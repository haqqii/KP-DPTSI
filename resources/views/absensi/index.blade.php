<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('partial.head')
    <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <style>

      .image_area {
        position: relative;
      }

      /* img {
          display: block;
          max-width: 100%;
      } */

      .preview {
          overflow: hidden;
          width: 160px; 
          height: 160px;
          margin: 10px;
          border: 1px solid red;
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

      .form-control{
        position: relative;
      }
      .text {
        color: #333;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
		  }

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

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-start">
            <h4 class="tx-poppins tx-medium mg-b-0"></h4>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="row row-sm">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="row">
                  <div class="col-md-6 px-3">
<<<<<<< HEAD
                    <div class="card-header bd-0 pd-30 justify-content-space-between align-items-center">
=======
                    <div class="card-header bd-0 pd-t-20 pd-b-10 justify-content-start align-items-center">
>>>>>>> 243fa92c9da30ee5f3b6b22931c394c9950f12a6
                      <h7 class="tx-poppins tx-medium mg-b-2">Hari ini</h7>
                      <h3 class="tx-poppins tx-medium mg-b-2">Senin, 07 April 2022</h3>
                      <h7 class="tx-poppins tx-medium mg-b-2 ">Pukul 07.00</h7>
                      <p class="card-text">dari pukul 10:44 WIB sampai dengan sekarang pukul 15:58 WIB atau selama total 5 jam 13 menit.</p>
                      <p class="card-text tx-poppins tx-13 mg-b-0">Anda telah mengisi survei kesehatan Harian.</p>
                      <a href="https://google.com" class="btn btn-custom btn-lg tx-white"> <ion-icon name="create-outline" class="tx-16"></ion-icon> Lihat Hasil Survei </a>
                      <p></p>
                      <p class="card-text tx-poppins tx-13 mg-b-0">Realisasi Kerja:</p>
                      <div class="wrapper">
                      <button class="add_btn" type="submit" > 
                        <ion-icon name="add-outline" class="tx-22 mg-l-3 mt-2 mg-b-2"></ion-icon>
                      </button>
                        <!-- <input type="submit" class="add_btn " value="Add"/> -->
                          <form class="new_item px-4 px-8">
                              <input class="form-control mx-auto " style="width: 75%;" type="text"  maxlength="50" name="server_input" id="text_field" placeholder="Tambah Realisasi Kerja" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tambah Realisasi Kerja'"/>
                          </form>
                          <div class="items">
                              <ul id="tasks_list" class="sortable"></ul>
                          </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-sm-6 px-20 pd-t-20 mg-b-10 bd-0">
<<<<<<< HEAD
                      <iframe style=" width: 500px; height: 300px; margin-left:20px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                      <div class="d-flex justify-content-start ">
                        <a href="https://google.com" style="white-space: nowrap;" class="btn btn-outline-primary tx-medium mg-l-20"> <ion-icon name="navigate"></ion-icon> Perbaiki Lokasi Otomatis</a>   
                        <p class="tx-poppins tx-9 mg-r-40 mg-l-40 mg-b-0 text-end">Berdasarkan lokasi pada peta, Anda terlacak sedang berda di luar kantor. Apabila pelacakan tidak akurat, silahkan klik tombol Perbaiki Lokasi Otomatis.</p>
                      </div>
=======
                      <iframe style=" width: 550px; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                        <a href="https://google.com" class="btn btn-outline-primary tx-medium"> <ion-icon name="navigate"></ion-icon> Perbaiki Lokasi Otomatis</a>   
                        <p class="tx-poppins tx-13 mg-b-0 text-end">Berdasarkan lokasi pada peta, Anda terlacak sedang berda di luar kantor. Apabila pelacakan tidak akurat, silahkan klik tombol Perbaiki Lokasi Otomatis.</p>
>>>>>>> 243fa92c9da30ee5f3b6b22931c394c9950f12a6
                    </div>  
                  <br>
                </div>      
              </div>
            </div>
<<<<<<< HEAD
            <p class="tx-poppins mg-b-0">Klik <a href="{{ url('/rekapan') }}" class="link-primary">disini</a> untuk melihat daftar lengkap rekap absen harian Anda.</p>
=======
            <p class="tx-poppins mg-b-0">Klik <a href="{{ url('/rekapan') }}" class="link-disini">disini</a> untuk melihat daftar lengkap rekap absen harian Anda.</p>
>>>>>>> 243fa92c9da30ee5f3b6b22931c394c9950f12a6
            
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    @extends('partial.footer')			
    
    @extends('partial.script')
    <script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
    <script>
      function uploadbtn(){
        $('[href="#upload"]').tab('show');
      }
      function homebtn(){
        $('[href="#home"]').tab('show');
      }
      function tabbtn(){
        $('[href="#home"]').tab('show');
      }
    </script>
    <script>
      $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $old_tab = $($(e.target).attr("href"));
        var $new_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() < $old_tab.index()){
          $old_tab.css('position', 'relative').css("right", "0").show();
          $old_tab.animate({"right":"-100%"}, 300, function () {
            $old_tab.css("right", 0).removeAttr("style");
          });
        }
        else {
          $old_tab.css('position', 'relative').css("left", "0").show();
          $old_tab.animate({"left":"-100%"}, 300, function () {
            $old_tab.css("left", 0).removeAttr("style");
          });
        }
      });

      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() > $old_tab.index()){
          $new_tab.css('position', 'relative').css("right", "-2500px");
          $new_tab.animate({"right":"0"}, 500);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-2500px");
          $new_tab.animate({"left":"0"}, 500);
        }
      });

      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // your code on active tab shown
      });
    </script>
    <script>
    $( document ).ready(function() {
      $('#upload_image').on('change', function() {
        if(this.value == "")
            $('#btn-select').attr("disabled", true);
          else
            $('#btn-select').attr("disabled", false);
      });
    });
    </script>

    <script>

      $(document).ready(function(){

        var $modal = $('#modal');
        var image = document.getElementById('sample_image');
        var cropper;

        $('#upload_image').change(function(event){
          var files = event.target.files;
          var done = function(url){
            image.src = url;
            $modal.modal('show');
          };

          if(files && files.length > 0)
          {
            reader = new FileReader();
            reader.onload = function(event)
            {
              done(reader.result);
            };
            reader.readAsDataURL(files[0]);
          }
        });

        $modal.on('shown.bs.modal', function() {
          cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview:'.preview'
          });
        }).on('hidden.bs.modal', function(){
          cropper.destroy();
            cropper = null;
        });

        $('#crop').click(function(){
          canvas = cropper.getCroppedCanvas({
            width:400,
            height:400
          });

          canvas.toBlob(function(blob){
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function(){
              var base64data = reader.result;
              $.ajax({
                url:'upload.php',
                method:'POST',
                data:{image:base64data},
                success:function(data)
                {
                  $modal.modal('hide');
                  $('#uploaded_image').attr('src', data);
                }
              });
            };
          });
        });
        
      });
    </script>

  </body>
</html>

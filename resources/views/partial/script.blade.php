<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jqueryui/jquery-ui.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/prismjs/prism.js"></script>
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.js"></script>
<script src="../../assets/js/dashforge.aside.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- Script base -->
<script>
    $(function() {
        'use strict'

        $('.off-canvas-menu').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).addClass('show');
        });

        $('.off-canvas .close').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.off-canvas').removeClass('show');
        })

        $(document).on('click touchstart', function(e) {
            e.stopPropagation();
            if (!$(e.target).closest('.off-canvas-menu').length) {
                var offCanvas = $(e.target).closest('.off-canvas').length;
                if (!offCanvas) {
                    $('.off-canvas.show').removeClass('show');
                }
            }
        });
    });
</script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>

<script>
    $(document).on('click', '.allow-focus', function(e) {
        e.stopPropagation();
    });
</script>

<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<!-- Sementara -->
<script>
    var goBtn = document.getElementById("goBtn");
    var menu = document.getElementById("menu");

    goBtn.onclick = function() {
        window.location = menu.value;
    }
</script>

<!-- Tahun Saat Ini -->
<script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("thn").innerHTML = year;
</script>

<script>
    var id = 1;

    function addtable() {
        id += 0;
        action = "";


        var table = document.getElementById("mytable");
        var myinput = document.getElementById("myinput");

        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.innerHTML = ('<tr><td style="width: 105px; height: 42px;">' +
            '<div class="pd-l-5 pd-r-5 mg-r-5 mx-auto">' +
            '<button type="button" id="run' + id + '"onclick="run()" class="btn-run mg-l-2"><i class="iconify" id="irun' + id + '" data-icon="ic:outline-directions-run" style="color:#1878F2"></i></button>' +
            '<button type="button" id="ok" onclick="ok()" class="btn-ok mg-l-2"><i class="iconify" data-icon="bi:check-lg" style="color:#AEB84C"></i></button>' +
            '<button type="button" id="cancel" onclick="cancel()" class="btn-cancel mg-l-2"><i class="iconify" data-icon="carbon:close" style="color:#E66F42"></i></button>' +
            '</div>' +
            '</td>'

        )
        cell2.innerHTML = ('<td>' +
            '<div class="pd-l-13 pd-r-13 align-items-center">' +
            myinput.value +
            '<button type="button" class="btn-option float-end" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="iconify" data-icon="iwwa:option" style="color:#9199A7"></i></button>' +
            '<div class="dropdown-menu">' +
            '<a href="#delegasi" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify tx-12" data-icon="heroicons-solid:user-group" style="color:#1878F2"></i></div> Delegasi</a>' +
            '<a href="#subrk" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify tx-12" data-icon="akar-icons:chevron-up" style="color:#1878F2"></i></div> Jadikan Sub RK</a>' +
            '<a href="#Ubah" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify" data-icon="bxs:edit" style="color:#1878F2"></i></div>Ubah</a>' +
            '<a href="#Hapus" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="mg-r-10 d-flex align-items-center justify-content-center"><i class="iconify" data-icon="fluent:delete-28-filled" style="color:#1878F2"></i></div> Hapus</a>' +
            '</div>' +
            '</div>' +
            '</td>' +
            '</tr>')
        myinput.value = "";
    }

    //BTN ACTION
  
    function run() {

        if(action ==""){

        var btn = document.getElementById("run" + id).style.backgroundColor = "#1878F2";
        var btn1 = document.getElementById("irun" + id).style.color = "#FFFFFF"
        action = "ok";
        alert(action);
        }
    }


        function ok() {
            if(action == "ok"){

            var ok = document.getElementById("ok").style.backgroundColor = "#1878F2";

            var btn = document.getElementById("run" + id).style.backgroundColor = "#FFFFFF";
            var btn1 = document.getElementById("irun" + id).style.color = "#1878F2"
            // var btn1 = document.getElementById("irun"+id).style.color = black;
            }
        }
    

</script>
<!-- <script>
    $( document ).ready(function() {
  $( ".js-click" ).click(function() {
    $( ".js-click" ).css('background', '#E66F42');
  });
});
</script> -->

<script>
    function changebtn() {

        var btn = document.getElementById("mybtn")

        if (btn.value == "Mulai Bekerja") {
            btn.value = "Akhiri Bekerja";
            btn.innerHTML = "Akhiri Bekerja";
            btn.style.backgroundColor = "#E66F42";

        } else {
            btn.value = "Mulai Bekerja";
            btn.innerHTML = "Mulai Bekerja";
            btn.style.backgroundColor = "#1878F2";
        }

    }
</script>

<script>

</script>
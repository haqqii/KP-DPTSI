<header class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 blur-transparent d-flex justify-content-between">
    <div class="d-flex align-items-center mg-l-10 mg-lg-l-20">
        <a href="#menu-sidebar" class="btn btn-icon btn-its-custom-1 off-canvas-menu rounded-its-50p d-flex align-items-center"><ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon></a>
        <a href="../beranda" class="d-flex justify-content-center align-items-center mg-l-10 mg-lg-l-20">
            <img src="../../assets/img/portal.png" class="ht-35">
            <p class="tx-poppins tx-medium tx-13 tx-md-15 tx-color-02 mg-b-0 mg-l-15"><span class="tx-semibold">Portal</span> myITS</p>
        </a>
    </div>
    <div class="d-flex align-items-center mg-r-10 mg-lg-r-20">
        <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt=""></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right allow-focus shadow rounded-its-10">
                <a href="../profil" class="dropdown-item-its tx-poppins tx-medium" style="padding-top: 20px !important; padding-bottom: 20px !important;">
                    <div class="avatar avatar-md mg-r-15">
                        <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt="">
                    </div>
                    <div class="media-body">
                        <p class="tx-15 tx-poppins tx-semibold mg-b-0 crop-text-1 text-left">Ghannie Wijaya</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 text-left">5116100048</p>
                    </div>
                </a>
                <a href="../lainnya/pengaturan.php" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="settings-sharp" class="tx-18"></ion-icon></span></div> Pengaturan Web</a>
                <a href="#chgRoleUser" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="people-sharp" class="tx-18"></ion-icon></span></div> Ganti peran</a>
                <a href="page-signin.html" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="log-out-sharp" class="tx-18"></ion-icon></span></div> Keluar</a>
            </div>
        </div>
    </div>
</header>

<div class="modal fade effect-scale" id="chgRoleUser" role="dialog" aria-labelledby="chgRoleUserLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
                <h5 class="tx-poppins tx-medium mg-b-0">Hak Akses</h5>
                <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            </div>
            <div class="modal-body">
                <p>Saat ini Anda berperan sebagai <b>Mahasiswa</b>.</p>
                <div class="form-group form-floating">
                    <select class="form-select" id="select_user" required>
                        <option value="">Pilih salah satu</option>
                        <option value="../beranda/index.php">Mahasiswa</option>
                        <option value="../beranda/admin-index.php">Administrator Direktorat Pengembangan Teknologi dan Sistem Informasi</option>
                        <option value="../beranda/kadep-index.php">Kadep Departemen Teknik Informatika</option>
                        <option value="../beranda/ditmawa-w-index.php">Verifikator Wirausaha Direktorat Kemahasiswaan</option>
                    </select>
                    <label for="select_user">Hak Akses Anda</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                <input class="btn btn-its-3 tx-poppins tx-medium" type="button" id="goBtn" value="Ganti">
            </div>
        </div>
    </div>
</div>
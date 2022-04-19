<header class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 blur-transparent d-flex justify-content-between">
    <div class="d-flex align-items-center mg-l-10 mg-lg-l-20">
        <a href="../beranda" class="d-flex justify-content-center align-items-center mg-l-5 mg-lg-l-15">
            <img src="../../assets/img/logo-myITS-Worktime.svg" class="ht-20 ht-md-25 mg-t-3 mg-md-t-5">
            <!-- <img src="../../assets/img/logo-myits-white.svg" class="ht-25 mg-t-3 mg-md-t-5"> -->
            <p class="tx-poppins tx-medium tx-18 tx-md-22 tx-custom-02 tx-spacing-2 mg-b-0 mg-l-10">Worktime</p>
        </a>
    </div>
    <div class="d-flex align-items-center mg-r-10 mg-lg-r-20">
        <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt=""></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right allow-focus shadow rounded-its-10">
                <a href="../profil" class="dropdown-item-its tx-poppins tx-medium bd-b" style="padding-top: 20px !important; padding-bottom: 20px !important;">
                    <div class="avatar avatar-md mg-r-15">
                        <img src="https://yt3.ggpht.com/a/AATXAJz2FUkWeS8_N25NHO_TJ4n7ivKlEX7eE2mbiWP9tQ=s900-c-k-c0x00ffffff-no-rj" class="rounded-circle" alt="">
                    </div>
                    <div class="media-body">
                        <p class="tx-15 tx-poppins tx-semibold mg-b-0 crop-text-1">Ghannie Wijaya</p>
                        <p class="tx-13 tx-normal tx-color-03 mg-b-0 crop-text-1">5116100048</p>
                    </div>
                </a>
                <a href="../lainnya/pengaturan.php" class="dropdown-item-its tx-poppins tx-medium"><div class="mg-r-10 d-flex align-items-center justify-content-center"><ion-icon name="settings-outline" class="tx-22"></ion-icon></div> Pengaturan Web</a>
                <a href="#chgRoleUser" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="mg-r-10 d-flex align-items-center justify-content-center"><ion-icon name="people-outline" class="tx-22"></ion-icon></div> Ganti peran</a>
                <a href="page-signin.html" class="dropdown-item-its tx-poppins tx-medium"><div class="mg-r-10 d-flex align-items-center justify-content-center"><ion-icon name="log-out-outline" class="tx-22"></ion-icon></div> Keluar</a>
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
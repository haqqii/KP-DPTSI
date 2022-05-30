<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('partial.head')
  </head>
  <style>
      .thead {
        color: #2a5885;
      }
      .table-td{
        text-align: center;
      } 
      tr td{
          border-right: 1px solid rgba(72, 94, 144, 0.16);
      }
      tr th{
        border-right: 1px solid rgba(72, 94, 144, 0.16);
      }
  </style>
  <body class="mn-ht-100v d-flex flex-column">
    @extends('partial.navbar')

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-60">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-10 mg-sm-b-10 mg-lg-b-10">
            <div class="d-flex align-items-center justify-content-start">
              <h4 class="tx-poppins tx-medium mg-b-0">Rekapan Absensi</h4>
            </div>
          </div>
          <div class="form-group">
            <div class="d-flex justify-content-end">  
                <div class="tx-poppins tx-medium mg-r-10 mg-t-5">
                    <p>Periode</p>
                </div>
                <div class="ml-10">
                    <select name="bulan"  class="form-select" id="bulan" >
                        <option value="M">Januari</option>
                        <option value="F">Februari</option>
                        <option value="F">Maret</option>
                        <option value="F">April</option>
                        <option value="F">Mei</option>
                        <option value="F">Juni</option>
                        <option value="F">Juli</option>
                        <option value="F">Agustus</option>
                        <option value="F">September</option>
                        <option value="F">Oktober</option>
                        <option value="F">November</option>
                        <option value="F">Desember</option>
                    </select>
                </div>
                <div>
                    <select name="nivel" class="form-select mr-2" id="nivel">
                        <option value="inicial">2001</option>
                        <option value="primaria">2002</option>
                        <option value="secundaria">2003</option>
                        <option value="secundaria">2004</option>
                        <option value="secundaria">2005</option>
                        <option value="secundaria">2006</option>
                        <option value="secundaria">2007</option>
                        <option value="secundaria">2008</option>
                        <option value="secundaria">2009</option>
                        <option value="secundaria">2010</option>
                        <option value="secundaria">2011</option>
                        <option value="secundaria">2012</option>
                        <option value="secundaria">2013</option>
                        <option value="secundaria">2014</option>
                        <option value="secundaria">2015</option>
                        <option value="secundaria">2016</option>
                        <option value="secundaria">2017</option>
                        <option value="secundaria">2018</option>
                        <option value="secundaria">2019</option>
                        <option value="secundaria">2020</option>
                        <option value="secundaria">2021</option>
                        <option value="secundaria">2022</option>
                        <option value="secundaria">2023</option>
                    </select>
                </div>
                <a href="{{ url('/absensi') }}">
                    <button type="submit" class="btn btn-primary ml-2">Tampilkan</button>
                </a>  
            </div>  
		  </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="row row-sm">
            <div class="container-fluid">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
                <div class="card bd-0">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-td">
                            <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align : middle;text-align:center;">No</th>
                                <th rowspan="2" style="vertical-align : middle;text-align:center;">Tanggal</th>
                                <th rowspan="2" style="vertical-align : middle;text-align:center;">Hari</th>
                                <th colspan="2">Waktu</th>
                                <th rowspan="2" style= "vertical-align : middle;text-align:center;" width: 25%>Jumlah Jam</th>
                                <th colspan="2" style="vertical-align : middle;text-align:center;">Lokasi</th>  
                            </tr>
                            <tr>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>01-03-2022</td>
                                    <td>Selasa</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02-03-2022</td>
                                    <td>Rabu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>03-03-2022</td>
                                    <td>Kamis</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>04-03-2022</td>
                                    <td>Jumat</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>05-03-2022</td>
                                    <td>Sabtu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>06-03-2022</td>
                                    <td>Minggu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>07-03-2022</td>
                                    <td>Senin</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>08-03-2022</td>
                                    <td>Selasa</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>09-03-2022</td>
                                    <td>Rabu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>10-03-2022</td>
                                    <td>Kamis</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>11-03-2022</td>
                                    <td>Jumat</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>12-03-2022</td>
                                    <td>Sabtu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>13-03-2022</td>
                                    <td>Minggu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>14-03-2022</td>
                                    <td>Senin</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>15-03-2022</td>
                                    <td>Selasa</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>16-03-2022</td>
                                    <td>Rabu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>17-03-2022</td>
                                    <td>Kamis</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>18-03-2022</td>
                                    <td>Jumat</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>19-03-2022</td>
                                    <td>Sabtu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>20-03-2022</td>
                                    <td>Minggu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>21-03-2022</td>
                                    <td>Senin</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>22-03-2022</td>
                                    <td>Selasa</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>23-03-2022</td>
                                    <td>Rabu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>24-03-2022</td>
                                    <td>Kamis</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>25-03-2022</td>
                                    <td>Jumat</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>26-03-2022</td>
                                    <td>Sabtu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>27-03-2022</td>
                                    <td>Minggu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>28-03-2022</td>
                                    <td>Senin</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>29-03-2022</td>
                                    <td>Selasa</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>30-03-2022</td>
                                    <td>Rabu</td>
                                    <td>07.00</td>
                                    <td>17.00</td>
                                    <td>8 jam</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                    <td>Jl. Teknik Kimia, Keputih, Sukolilo, Surabaya City</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    </div>  
                </div>
                </div>
              </div> 
            </div>
          </div><!-- row -->
        
        

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    @extends('partial.footer')
    
    @extends('partial.script')

  </body>
</html>

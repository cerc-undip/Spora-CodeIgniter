<div class="container" style="padding-top:150px">
    <div class="row">
        <div class="col-md-8" id="register">
            <div class="card card-body">
                <h4 class="card-title">Daftar Akun Baru</h4>
                <p class="card-text">
                    1. Klik button daftar pada … atau masuk pada link … <br />
                    2. Isikan identitas yang diminta <br />
                    3. Jika sudah lengkap klik button “BUAT AKUN” <br />
                    4. Lakukan cek email untuk memverifikasi akun anda melalui link yang dikirim dari spora <br />
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="login">
                <h4 class="card-title">Masuk ke Akun</h4>
                <p class="card-text">
                    1. Untuk masuk akun, klik button masuk pada … atau masuk pada link<br />
                    2. Isikan email dan password anda<br />
                    3. Jika sudah, klik button “MASUK” <br />
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="profil">
                <h4 class="card-title">Pengaturan Akun</h4>
                <p class="card-text">
                    1. Untuk mengatur akun, masuk pada menu akun, klik button … <br />
                    2. Edit profile sesuai keinginan anda <br />
                    3. Simpan jika sudah selesai dengan klik button “SIMPAN”. <br />
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="logout">
                <h4 class="card-title">Keluar</h4>
                <p class="card-text">
                   Untuk keluar akun anda cukup klik button “KELUAR” pada menu akun anda di bagian ... 
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="publisher">
                <h4 class="card-title">Menjadi Publisher di <b>SPORA</b></h4>
                <p class="card-text">
                    Melakukan pembuatan proyek <br />
                    1. Login menggunakan akun spora yang sebelumnya sudah dibuat dengan cara klik button …. <br />
                    2. Masuk ke dashboard  user dengan cara klik menu … <br />
                    3. Klik menu edit data user dan lengkapi data-data yang diperlukan <br />
                    4. Klik button tambah proyek dan isikan keterangan serta detail proyek yang akan di-publish <br />
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="trainer">
                <h4 class="card-title">Menjadi Trainer di <b>SPORA</b></h4>
                <p class="card-text">
                    Melakukan pengambilan proyek<br />
                    1. Login menggunakan akun spora yang sebelumnya sudah dibuat dengan cara klik button …. <br />
                    2. Masuk ke dashboard  user dengan cara klik menu … <br />
                    3. Klik menu edit data user dan lengkapi data-data yang diperlukan <br />
                    4. Akses kembali portal proyek dan pilih proyek yang akan anda jalankan <br />
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="buyer">
                <h4 class="card-title">Sebagai Buyer di <b>SPORA</b></h4>
                <p class="card-text">
                    Melakukan Transaksi <br />
                    1. Login menggunakan akun spora yang sebelumnya sudah dibuat dengan cara klik button …. <br />
                    2. Klik produk yang akan Anda beli <br />
                    3. Isikan data alamat pengiriman produk atau centang “Sama dengan alamat user” lalu klik pesan untuk melakukan pemesanan <br />
                    4. Akan muncul notifikasi biaya yang harus dibayarkan, lakukan pembayaran dengan cara transfer ke No. Rek. xxx Bank xxx atas nama xxx dan simpan bukti bayar <br />
                    4. Setelah lakukan pembayaran, login kembali ke sistem spora dan akses dashboard user dengan cara klik … <br />
                    5. Klik menu “Cek Pemesanan” dan upload bukti bayar lalu tunggu konfirmasi Admin <br />
                    6. Produk yang Anda pesan akan dikirimkan ke alamat Anda <br />
                </p>
            </div>
        </div>
        <div class="col-md-1">
        </div>
        
        <div class="col-md-3">
            <div class="col-md-12">
                <button onclick="myFunction()" class="dropbtn">Panduan Umum</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#register">Daftar Akun Baru</a>
                    <a href="#login">Masuk ke Akun</a>
                    <a href="#profil">Pengaturan Akun</a>
                    <a href="#logout">Keluar</a>
                    <a href="#publisher">Menjadi Publisher</a>
                    <a href="#trainer">Menjadi Trainer</a>
                    <a href="#buyer">Menjadi Buyer</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
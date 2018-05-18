<div class="container" style="padding-top:150px">
    <div class="row">
        <div class="col-md-8" id="standard">
            <div class="card card-body">
                <h4 class="card-title">Umum</h4>
                <p class="card-text" style="text-align: justify;">
                    Spora merupakan Situs E-Commerce yang mengangkat masyarakat pra-sejahtera agar memiliki produk dengan nilai jual. Situs spora ini dikelola oleh manajemen spora.Dengan mengakses dan menggunakan situs spora anda dinyatakan telah memahami dan menyepakati semua isi dalam ketentuan-ketentuan pada situs ini.

            </div>
            
            <br />
            <div class="card card-body" id="volunteer">
                <h4 class="card-title">Bagi Volunteer</h4>
                <p class="card-text">
                </p>
            </div>
            
            <br />
            <div class="card card-body" id="buyer">
                <h4 class="card-title">Bagi Buyer</h4>
                <p class="card-text">
                </p>
            </div>
            
        </div>
        <div class="col-md-1">
        </div>
        
        <div class="col-md-3">
            <div class="col-md-12">
                <button onclick="myFunction()" class="dropbtn">Syarat dan Ketentuan</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#standard">Ketentuan Umum</a>
                    <a href="#volunteer">Ketentuan bagi Volunteer</a>
                    <a href="#buyer">Ketentuan bagi Buyer</a>
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
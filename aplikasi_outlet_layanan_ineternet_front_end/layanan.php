<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Test D~Net</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="link_users" href="#">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="link_transaksi" href="#">Transkasi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" id="link_layanan" href="#">Layanan<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top:15px">
        <div class="row">
            <div class="col-md-4">
                <form action="#" id="user" method="PUT">
                    

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Nama Layanan</label>
                            <input type="text" class="form-control" id="validationDefault03" name="Nama_layanan"
                                placeholder="Paket Data Hemat" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Biaya berlangganan</label>
                            <input type="number" class="form-control" id="validationDefault03" name="Biaya_berlangganan"
                                 required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Kapasitas jarigan</label>
                            <input type="number" class="form-control" id="validationDefault01" name="Kapasitas_jaringan"
                                 required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Kecepatan transfer</label>
                            <input type="text" class="form-control" id="validationDefault02" name="Kecepatan_transfer_data"
                                placeholder="1" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Bandwith</label>
                            <input type="text" class="form-control" id="validationDefault03" name="Bandwith"
                                placeholder="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Type</label>
                            <select class="custom-select" name="Type" id="validationDefault04" required>
                                <option value="1">Pra bayar</option>
                                <option value="2">Pasca bayar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Layanan</th>
                            <th scope="col">Biaya Berlangganan</th>
                            <th scope="col">Bandwith</th>
                            <th scope="col">Kapasitas jaringan</th>
                            <th scope="col">Kecepatan Transfer</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id='body'>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
<script>
        $(document).ready(function(){
    
    var text = '';
    var token;
    var status;
    var site_url;
       function $_GET(param) {
            var vars = {};
            window.location.href.replace( location.hash, '' ).replace( 
                /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
                function( m, key, value ) { // callback
                    vars[key] = value !== undefined ? value : '';
                }
            );

            if ( param ) {
                return vars[param] ? vars[param] : null;	
            }
            return vars;
        }
        var token = $_GET('token'),
                site_url = $_GET('site_url'),status=$_GET('status');
                document.getElementById("link_users").href = site_url+"users.php?status="+status+"&token="+token+"&site_url="+site_url;
                document.getElementById("link_layanan").href = site_url+"layanan.php?status="+status+"&token="+token+"&site_url="+site_url;
                document.getElementById("link_transaksi").href = site_url+"transaksi.php?status="+status+"&token="+token+"&site_url="+site_url;

    function cek_login() {
        function $_GET(param) {
            var vars = {};
            window.location.href.replace( location.hash, '' ).replace( 
                /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
                function( m, key, value ) { // callback
                    vars[key] = value !== undefined ? value : '';
                }
            );

            if ( param ) {
                return vars[param] ? vars[param] : null;	
            }
            return vars;
        }
        var token = $_GET('token'),
                site_url = $_GET('site_url'),status=$_GET('status');
         
    
    }


  
    

  // jika terjadi event submit pada form
  



   
    function tabel() {
        var xmlhttp = new XMLHttpRequest();
        var url = "http://localhost:8000/layanan?token=" + token;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
         
            var myArr = JSON.parse(this.responseText);
            cek_login();
            console.log(site_url);
            console.log(myArr["status"]);
            console.log(myArr["status"]=="logout");
            console.log(token);
            console.log(myArr);
            if(myArr["status"]=="logout"){
                location.replace(site_url);
            }
            document.getElementById("body").innerHTML = "";
            
           
            $("#body").empty();
            for (i = 0; i < myArr['data_user'].length; i++) {
                text += '<tr>' +
                    '<td>' + myArr['data_user'][i].Id + '</td>' +
                    '<td>' + myArr['data_user'][i].Nama_layanan + '</td>' +
                    '<td>' + myArr['data_user'][i].Biaya_berlangganan + '</td>' +
                    '<td>' + myArr['data_user'][i].Bandwith + '</td>' +
                    '<td>' + myArr['data_user'][i].Kapasitas_jaringan + '</td>' +
                    '<td>' + myArr['data_user'][i].Kecepatan_transfer_data + '</td>' +
                    '<td>' + myArr['data_user'][i].Type + '</td>' +
                    '<td>' + myArr['data_user'][i].Status + '</td>' +
                    '</tr>';
            }

            document.getElementById("body").innerHTML = text;
            text= '';
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    }

    cek_login();
  tabel();
  
//   var token = "21232f297a57a5a743894a0e4a801fc3";
    var xmlhttp = new XMLHttpRequest();
    var urlku = "http://localhost:8000/layanan?token=" + token;

  $('#user').submit(function(e) {

    // mencegah agar halaman tidak pindah halaman / refresh
    e.preventDefault()
    // ambil data
    var data = $(this).serialize()
    // ambil method dari method di form
    var method = $(this).attr('method')
    // ke mana data akan dikirim
    // diambil dari action di form
    var action = $(this).attr('action')
    // memulai kirim ajax
    $.ajax({
      url: urlku,
      data: data,
      method: method,
      beforeSend: function() {
        // lakukan sesuatu sebelum data dikirim
        // misalkan memulai loading
      },
      success: function(data) {
        tabel();
      }
    })
  })



   

})
</script>

</html>
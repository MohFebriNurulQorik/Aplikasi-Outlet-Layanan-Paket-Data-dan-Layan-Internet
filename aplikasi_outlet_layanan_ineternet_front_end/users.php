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
                <li class="nav-item active">
                    <a class="nav-link" href="users">Registrasi<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi">Transkasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="layanan">Layanan</a>
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
                            <label for="validationDefault01">Name</label>
                            <input type="text" class="form-control" id="validationDefault01" name="name"
                                placeholder="Akbar" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Phone</label>
                            <input type="text" class="form-control" id="validationDefault02" name="phone"
                                placeholder="081212123" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Email</label>
                            <input type="text" class="form-control" id="validationDefault03" name="email"
                                placeholder="ShonAlay@gmail.com" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Password</label>
                            <input type="text" class="form-control" id="validationDefault03" name="password_baru"
                                placeholder="*******" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Adress</label>
                            <input type="text" class="form-control" id="validationDefault03" name="adress"
                                placeholder="Jember" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Roles</label>
                            <select class="custom-select" name="roles_id" id="validationDefault04" required>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
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
        var url = "http://localhost:8000/users?token=" + token;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
         
            var myArr = JSON.parse(this.responseText);
            cek_login();
            console.log(site_url);
            console.log(myArr["status"]);
            console.log(myArr["status"]=="logout");
            console.log(token);
            if(myArr["status"]=="logout"){
                location.replace(site_url);
            }
            document.getElementById("body").innerHTML = "";
            
           
            $("#body").empty();
            for (i = 0; i < myArr['data_user'].length; i++) {
                text += '<tr>' +
                    '<td>' + myArr['data_user'][i].id + '</td>' +
                    '<td>' + myArr['data_user'][i].name + '</td>' +
                    '<td>' + myArr['data_user'][i].email + '</td>' +
                    '<td>' + myArr['data_user'][i].phone + '</td>' +
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
    var urlku = "http://localhost:8000/users?token=" + token;

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
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
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top:15px">
        <div class="row">
            <div class="col-md-12">
            <table class="table" id="table" data-page-length='5'>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Layanen</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Priode Beralanggan</th>
                            <th scope="col">Priode Akhir Berlangganan</th>
                            <th scope="col">Nominal Dibayarkan</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Tanggal Pembayaran</th>
                            <th scope="col">Type Pembayaran</th>
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
                site_url = $_GET('site_url'),status=$_GET('status'),id_user=$_GET('id_user');
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
                site_url = $_GET('site_url'),status=$_GET('status'),id_user=$_GET('id_user');
         
    
    }


  
    

  // jika terjadi event submit pada form
  



   
    function tabel() {
        var xmlhttp = new XMLHttpRequest();
        var url = "http://localhost:8000/transaksi_user/"+id_user+"?token=" + token;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
         
            var myArr = JSON.parse(this.responseText);
            cek_login();
            console.log(123);
            console.log(myArr);
            if(myArr["status"]=="logout"){
                location.replace(site_url);
            }
            document.getElementById("body").innerHTML = "";
            
           
            $("#body").empty();
            console.log(myArr);
            for (i = 0; i < myArr['data'].length; i++) {
                text += '<tr>' +
                    '<td>' + (i+1) + '</td>' +
                    '<td>' + myArr['data'][i].Nama_layanan + '</td>' +
                    '<td>' + myArr['data'][i].name + '</td>' +
                    '<td>' + myArr['data'][i].phone + '</td>' +
                    '<td>' + myArr['data'][i].Priode_start + '</td>' +
                    '<td>' + myArr['data'][i].Priode_end + '</td>' +
                    '<td>' + myArr['data'][i].Nominal_dibayarkan + '</td>' +
                    '<td>' + myArr['data'][i].Status_pembayaran + '</td>' +
                    '<td>' + myArr['data'][i].Tgl_bayar + '</td>' +
                    '<td>' + myArr['data'][i].Type + '</td>' +
                    '<td>' + myArr['data'][i].status + '</td>' +
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





   

})
</script>

</html>
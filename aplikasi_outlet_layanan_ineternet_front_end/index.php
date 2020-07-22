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
    </nav>
    <div class="container" style="padding-top:15px">
        <div class="row">
            <div class="col-md-6">
            <form action="#" method="post" id="login">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" >Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword3" required>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
            </form>
            </div>
        
        </div>

    </div>

</body>
<script>
        var urlku = "http://localhost:8000/login";
        $('#login').submit(function(e) {
            

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
                console.log(data);
                if(data.status=="error"){
                    alert("login gagal, coba lagi masukan user dan password nya");
                }else if(data.status=="sukses"){
                    if(data.id==1){

                        location.replace(document.URL+"users.php?status="+data.status+"&token="+data.token+"&site_url="+document.URL);
                    }else if(data.id==2){
                        location.replace(document.URL+"pelanggan.php?status="+data.status+"&token="+data.token+"&site_url="+document.URL+"&id_user="+data.id);

                    }
                }
            }
            })
        })
</script>
</html>
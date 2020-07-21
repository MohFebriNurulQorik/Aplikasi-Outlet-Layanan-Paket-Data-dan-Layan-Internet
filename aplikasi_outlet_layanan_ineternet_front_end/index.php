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
                <form action="" method="post">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
                    <input type="text">
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
    var token = "21232f297a57a5a743894a0e4a801fc3";
    var xmlhttp = new XMLHttpRequest();
    var url = "http://localhost:8000/users?token=" + token;
    var text = '';
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);

            console.log(myArr['data_user']);
            for (i = 0; i < myArr['data_user'].length; i++) {
                text += '<tr>' +
                    '<td>' + myArr['data_user'][i].id + '</td>' +
                    '<td>' + myArr['data_user'][i].name + '</td>' +
                    '<td>' + myArr['data_user'][i].email + '</td>' +
                    '<td>' + myArr['data_user'][i].phone + '</td>' +
                    '</tr>';
            }

            document.getElementById("body").innerHTML = text;
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
</script>

</html>
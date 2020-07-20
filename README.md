# Aplikasi-Outlet-Layanan-Paket-Data-dan-Layan-Internet
Tes Aplikasi D~Net

Adi adalah seorang pengusaha, yang punya outlet yang menjual banyak layanan paket data / internet. 
Setiap bulannya dia melakukan rekap data dan laporan dengan cara manual. 
Buatlah aplikasi yang bisa membantu Adi dalam menyelesaikan pekerjaanya dengan minimal scope seperti berikut: 
a. Data user / hak akses 
b. Data Pelanggan 
c. Data Layanan / Paket data 
d. Data Transaksi

Nama : Moh. Febri Nurul Qorik, S.Kom 
Telp : 08121662744

Penting

1. donwload database aplikasi_data_internet
2. copy ke server (MySql)
3. download folder aplikasi_outlet_layasan_internet_back_end_lumen
4. setting .env
   contoh :
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=aplikasi_data_internet
    DB_USERNAME=root
    DB_PASSWORD=
    
5. jalankan 'php -S localhost:8000 -t public' di derectori folder aplikasi_outlet_layasan_internet_back_end_lumen menggunkan terimanal
   contoh : C:\xampp\htdocs\D_NET\aplikasi_outlet_layanan_ineternet_back_end_lumen>php -S localhost:8000 -t public
6. back end redy

Back End
URL : http://localhost:8000

Test 
Metod :get
Request : /
resepon : 
{
    "status": "Konek"
}


 


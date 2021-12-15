# HMVC CodeIgniter 4 Framework

## KONSEP MVC

Codeigniter mengadopsi konsep MVC
dimana sintak/coding akan dibagi menjadi 3 bagian utama :
1. Control
2. Model
3. View

## KONSEP HMVC

HMVC sendiri merupakan pengembangan konsep dari MVC, dimana pada MVC, semua controller berada dalam 1 folder yg sama, pun demikian dg model dan view.

Sedangkan HMVC sedikit berbeda, dimana tidak semua controller berada dalam 1 folder yg sama, pun dg model dan view.

Tapi, mereka dipisah ke dalam modul tertentu sesuai dg kegunaan dari tiap2 controller/model/view itu sendiri. Sehingga dari segi estetika penulisan sedikit lebih rapi.

Tapi buka itu saja, keuntungan lain dari konsep HMVC ini adalah mudah dalam membuat aplikasi dalam sekala yg besar.

## PENGGUNAAN KONSEP HMVC PADA CODEIGNITER 4

1. Buat modul baru di dalam folder app\Module (awali dg huruf besar)
2. Setiap modul baru yg dibuat, pastikan di dalamnya ada 3 folder utama (Controller, Models, Views)
3. Tambahkan file Routes.php pada modul tadi, untuk membuat routes yg lebih spesifik untuk modul tersebut. (opsional)
4. Silahkan memulai kodingan teman-teman.
API (Application Programming Interface)

atau sekumpulan fungsi, subroutine, protokol komunikasi, atau kakas/tools untuk membuat perangkat lunak. 

Interface/antar muka?
"bagian yang sama antara dua atau lebih komponen terpisah pada sebuah sistem komputer.

API, antar muka yang berupa kumpulan fungsi yang dapat dipanggil atau dijalankan oleh program lain.
Penerapannya sangat luas
  - Bahasa pemrograman
  - Library dan framework
  - Sistem operasi
  - Web API / Web service

WEB API/ WEB Service
  - SOAP (Simple Object Access Protocol)
  - REST (REpresentational State Transfer)
"Sebuah sistem perangkat lunak yang dibuah untuk mendukung interoperabilitas / interaksi antar 2 aplikasi yang berbeda melalui jaringan."

===================================================================

Rest API
"Gaya arsitektural perangkat lunak yang di dalamnya mendefiniskan aturan aturan untk membuat web service."
- REpresentasional State Transfer
- Gaya perancangan / architecturan style
- Stateless (tidak ada state)
- by Roy Fielding, di disertasi PhD-nya
- Hampir selalu menggunakan HTTP
- Memungkinkan interaksi antar mesin

URL
- Alamat dari sebuah resource yang dapat diakses di internet

Kode Status
- 200 : success
- 404 : not found
- 500 : server error

HTTP Method / Verbs
* GET : mengambil data
* POST : menambah data
* PUT : Mengubah data
* DELETE : Menghapus data

Stateless
- Setiap request HTTP dilakukan secara terisolasi
- Server tidak menyimpan state apapun mengenai sesi dari client
- Setiap reuest dari client harus berisi semua informasi yang dibutuhkan server, termasuk informasi otentikasi

RESTful API
- Menggunakan HTTP method yang benar
- URL / endpoinst-nya menggunakan kata benda, bukan kata kerja
- Harus stateless
- Menggunakan REST secara benar

=====================================================================

JSON
"adalah sebuah file format standar yang menggunakan tulisan yang dapat dibaca oleh manusia untuk pertukaran data, yang di dalamnya berisi pasangan antara key dan value."
* Format pertukaran data tekstual yang sangat ringan
* Sintaksnya sangat sederhana dan jelas (dibanding XML)
* Dapat digunakan pada beragam bahasa pemrograman
* Tiap bahasa pemrograman memiliki cara tersendiri untuk berinteraksi dengan JSON
* Dibuat berdasarkan format object pada javascript
* Digunakan juga untuk file konfigurasi
* Tpe file JSON memiliki ekstensi .json
* Format JSON dibuat dan diusulkan oleh Douglas

Pasangan antara key dan value, {"key" = "value"}
Tidak boleh mengandung method (function di dalam object)
Tapi boleh mengandung : boolean, array ['value1', 'value2', ..], string, object, number, null. (BASONN).

=====================================================================

Public API / OpenAPI
"Sebuah RestAPI yang dapat diakses secara publik, yang di dalamnya tersedia aturan untuk developer agar dapat mengakses data"

any-api.com, github.com/toddmotto/public-apis, github.com/farizdotid

Otentikasi (auth)
- Tanpa otentikasi
- Key / Token
- OAuth
* CORS 
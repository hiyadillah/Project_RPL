# Project_RPL


Nama sistem : LinkedOn 

Paralel : 2 

Kelompok : 1 

Nama Asisten Praktikum : Ali


Nama Kelompok
1. Aldinur Syahdin Halim Simbolon ( role )
2. Dimas Nabil ( role )
3. Ilham Iyadillah ( role )
4. Mahara ihsan kahfi ( role )

**Latar Belakang**
	
Teknologi saat ini sudah berkembang dengan sangat pesat dan dapat menyelesaikan permasalahan yang ada sehingga dimanfaatkan di berbagai bidang seperti bidang pendidikan Contoh 
masalah yang ada di bidang pendidikan adalah banyaknya organisasi yang ada di perguruan tinggi negeri sehingga mahasiswa kesulitan untuk mendapatkan informasi yang tepat. Saat 
ini, perguruan tinggi negeri bukan hanya berfungsi sebagai sarana pendidikan formal, tetapi juga berfungsi sebagai sarana penyaluran bakat. Sarana penyaluran bakat tersebut 
dapat berupa organisasi atau kepanitiaan yang berada di bawah perguruan tinggi negeri tersebut. Banyaknya organisasi dan kepanitiaan yang ada akan menciptakan masalah baru yaitu 
informasi yang tidak merata. Masalah ini dapat diselesaikan dengan cara menyimpan informasi ke dalam sebuah aplikasi sehingga seluruh mahasiswa bisa mempunyai akses informasi 
terhadap organisasi atau kepanitiaan yang ada di suatu perguruan tinggi negeri. Berdasarkan permasalahan diatas, maka dibuatlah solusi berupa aplikasi bernama “LinkedOn”, yaitu 
sebuah aplikasi berbasis web yang berguna sebagai wadah untuk menghubungkan kegiatan-kegiatan mahasiswa seperti PKM, UKM dan event-event lainnya.

**Tujuan**

Mempermudah mahasiswa dalam mencari informasi
Mengurangi broadcast di media sosial
Agar informasi menjadi lebih terpusat

**Deskripsi Singkat**
	
LinkedOn merupakan aplikasi berbasis web yang berguna sebagai wadah untuk menghubungkan kegiatan-kegiatan kemahasiswaan seperti UKM,PKM, dan event-event lainnya dengan mahasiswa 
secara umum. LinkedOn memiliki fitur untuk menampilkan menampilkan info lowongan pada event, organisasi serta kepanitiaan dan info mengenai organisasi, kepanitiaan atau event-
event yang ada di dalam kampus.  Setiap pengguna dapat membuat profile dan dapat membuat lowongan ataupun mendaftarkan diri pada suatu lowongan. 
	
**User analysis**
**User story**

Sebagai user saya dapat membuat profil
1. Manajemen Profil
-Mengatur nama
-Mengatur password

2.Mencari lowongan berdasarkan kata kunci
3.Sebagai user saya ingin membuat post
Membuat post akan menjadi fitur dari setiap profil

**Spesifikasi teknis lingkungan pengembangan**

Software
Framework : Laravel, Bootstrap
Database : MySQL
Server : Apache
Text Editor/IDE : Visual Studio Code atau Sublime Text 3
Hardware
Processor : minimal 1 GHz
RAM : 1 GB
Graphic Card : DirectX 9 dengan drive WDDM 1.0

Tech Stack
Version Control dan Collaboration Platform : Github dan Trello
Teknologi : CSS/HTML, Javascript dan PHP

**Hasil dan pembahasan**

Use case diagram

![use case LinkedOn](https://user-images.githubusercontent.com/72461590/121895926-f5338380-cd4a-11eb-9664-b361cae509b7.png)

Activity diagram 

![activity diagram](https://user-images.githubusercontent.com/72461590/121897351-78a1a480-cd4c-11eb-83ad-0b649d3828d0.jpg)

Class diagram 

![class diagram](https://user-images.githubusercontent.com/72461590/121897476-9f5fdb00-cd4c-11eb-839f-e0533aff982b.png)

Entity Relationship Diagram 

![ERD linkedOn 0](https://user-images.githubusercontent.com/72461590/121897569-b56d9b80-cd4c-11eb-8e7e-8059f14e1f98.png)

Arsitektur sistem

![Arsitektur Aplikasi LinkedOn](https://user-images.githubusercontent.com/72461590/121897665-cfa77980-cd4c-11eb-921b-49e414debd3e.png)

Fungsi utama yang dikembangkan

1.Registrasi

![registrasi linkedOn](https://user-images.githubusercontent.com/72461590/121897784-ec43b180-cd4c-11eb-99dc-a45bb8c03acb.png)

2. Log in

![Login LinkedOn](https://user-images.githubusercontent.com/72461590/121897885-01b8db80-cd4d-11eb-9a71-9cc64e9840dc.png)

3. Create Post

![Create Post](https://user-images.githubusercontent.com/72461590/121897979-1bf2b980-cd4d-11eb-8199-3dcb3c4ec849.png)

4. Search Post

![Search Post](https://user-images.githubusercontent.com/72461590/121898083-362c9780-cd4d-11eb-82c8-dcec1b472fd8.png)

**Fungsi CRUD**

| Use Case | C | R | U | D|
| --------------- | --------------- | --------------- | --------------- | --------------- |
| Registrasi pada LinkedOn | V |  | |  |
| Melihat Post lowongan UKM/Kegiatan mahasiswa | | V | | |
| Menghapus Lowongan UKM/Kegiatan Mahasiswa  |  |  | | V |
| Searching Lowongan UKM/Kegiatan Mahasiswa  |  | V | | |
| Membuat Lowongan UKM/Kegiatan Mahasiswa  | V |  | |  |
| Mengedit Password user  |  |  | V |  |
| Melihat daftar akun (admin)  |  | V | | |
| Menghapus akun  | |  | V |  |

**Hasil implementasi**
Screenshot sistem

Welcome Page

![homepage](https://user-images.githubusercontent.com/72461590/121905922-cf12e100-cd54-11eb-96aa-df84a6322fc0.png)

Login

![login](https://user-images.githubusercontent.com/72461590/121906188-10a38c00-cd55-11eb-947a-60aec70a36c6.png)

Registrasi

![registrasi linkedOn](https://user-images.githubusercontent.com/72461590/121906358-3df03a00-cd55-11eb-8ae2-8f356e8b27ca.png)

Dashboard

![dashboard](https://user-images.githubusercontent.com/72461590/121906826-b0611a00-cd55-11eb-8dc5-cb0d0e957690.png)

Profile

![profile](https://user-images.githubusercontent.com/72461590/121906917-c7a00780-cd55-11eb-9878-33d6bba26dac.png)

Reset Password

![Reset Password](https://user-images.githubusercontent.com/72461590/121907003-d8e91400-cd55-11eb-9070-e3c187cee0ba.png)

Membuat Project

![Membuat Project](https://user-images.githubusercontent.com/72461590/121907130-f918d300-cd55-11eb-8153-230662ef68d4.png)

Hapus Project

![Hapus Project](https://user-images.githubusercontent.com/72461590/121907213-0b930c80-cd56-11eb-94e2-46edefb8b51f.png)

**Testing (Test cases)**

Positive Case

| Scenario | Prequisite | Steps | Expected Result | Actual Result|Status|
| --------------- | --------------- | --------------- | --------------- | --------------- |--------------- |
| User mendaftar dengan data yang valid | User mengakses website | User mengakses halaman login, akses halaman daftar, lakukan pendaftaran dengan memasukkan nama, email, password, klik daftar | Pendaftaran berhasil, user dialihkan ke halaman login| As expected |Pass✅|
| User login dengan akun yang valid | User telah mendaftar pada link LinkedOn| User mengakses halaman login, masukkan email dan  password, klik masuk | Login berhasil dan user dialihkan ke halaman dashboard|As expected |Pass✅|
| User membuat postingan project dengan data yang valid  | User telah login ke website LinkedOn | User mengakses halaman Post new project, masukkan nama project, deskripsi, tanggal tutup proyek dan foto/logo, klik post |Posting berhasil dan user dialihkan ke halaman dashboard | As expected |Pass✅|
| User mereset password   | User telah login dan mengakses halaman profile | User memasukkan password dan konfirmasi password, Klik Update PasswordReset Password berhasil |Reset Password berhasil | As expected|Pass✅|
| User menghapus project  | User telah login dan mengakses halaman profile |User mengklik tombol hapus pada project  |Project berhasil dihapus | As expected |Pass✅|
| User melakukan login tanpa melakukan pendaftaran terlebih dahulu  | User mengakses website | User mengakses website kemudian melakukan login dan mengisikan email dan password yang belum pernah dilakukan  | Terdapat error yang terjadi karena memasukan email dan | As expected |Pass✅|

Negative Case

| Scenario | Prequisite | Steps | Expected Result | Actual Result|Status|
| --------------- | --------------- | --------------- | --------------- | --------------- |--------------- |
| User melakukan pendaftaran | User mengakses website | User mengakses website kemudian melakukan pendaftaran hanya mengisikan nama  | Terdapat warning yang terjadi karena belum memasukan email dan password| Terjadi error yang tampil pada halaman yang berbeda |Failed❌|
| User melakukan posting project  | User telah login dan mengakses halaman post new project | User memasukkan hanya beberapa data seperti hanya mengisi tanggal atau upload file saja|Terdapat warning karena belum memasukkan data yang diperlukan yaitu nama project dan deskripsi project| Terjadi error yang tampil pada halaman yang berbeda|Failed❌|
| User menghapus account | User telah berada di halaman profile | User menekan tombol hapus akun |User dialihkan ke homepage dan seluruh data dari akun tersebut tidak ditampilkan lagi terutama project-project yang pernah dipost | account tersebut berhasil dihapus tetapi Project yang pernah dipost akun tersebut masih ada|Failed❌|

**Saran untuk pengembangan selanjutnya**

- Website belum memfasilitasi pendaftaran project-project yang dipost, harapannya pengembangan selanjutnya bisa memfasilitasi sampai ke pendaftaran project-projectnya 
- Seharusnya Homepage dan dashboard itu sama karena bisa menampilkan project yang ada meskipun belum melakukan log in
- Nama dan email sebaiknya bisa diubah (manajemen profile)
- Ketika akun dihapus, seharusnya project yang telah dibuat pada akun tersebut ikut dihapus juga atau tidak ditampilkan pada dashboard pada saat melakukan log in menggunakan akun yang lain
- Ditambahkan fitur filter pada search
- Pada profil seharusnya terdapat deskripsi untuk menjelaskan sebuah profil lebih baik lagi

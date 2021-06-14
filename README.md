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
| Registrasi pada LinkedOn | Row 1 Column 2 | Row 1 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Melihat Post lowongan UKM/Kegiatan mahasiswa | | Row 2 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Menghapus Lowongan UKM/Kegiatan Mahasiswa  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Searching Lowongan UKM/Kegiatan Mahasiswa  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Membuat Lowongan UKM/Kegiatan Mahasiswa  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Mengedit Password user  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Melihat daftar akun (admin)  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |
| Menghapus akun  | Row 3 Column 2 | Row 3 Column 3 |Row 1 Column 2 | Row 1 Column 3 |




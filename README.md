# Jawaban Tes Rekrutment Arkademy

## Nomor 1
##### function yang mempunyai return value berformat JSON dan berisi dari deskripsi produk
![alt text](https://i.imgur.com/wpnnSPs.png)<br>

## Nomor 2
##### function untuk memverifikasi field username dengan requirements lima karakter pertama huruf kecil dilanjutkan underscore atau titik dan dilanjutkan dua huruf besar<br>
```html
<input type="text" pattern="[a-z]{5}[_.]?[A-Z]{2}">
```

## Nomor 3
##### function untuk mencetak segi tiga siku deret bilangan asli dengan parameter panjang deret, dengan panjang deret tidak boleh lebih dari 10, dan ada pesan error jika lebih dari 10
![alt text](https://i.imgur.com/m9YSXkr.png)<br>

## Nomor 4
##### function untuk menghitung jumlah jabat tangan yang terjadi dalam pertemuan yang dihadiri oleh beberapa orang, jika setiap orang berjabat tangan dengan semua yang hadir dan hanya sekali berjabat tangan tangan dengan orang yang sama
![alt text](https://i.imgur.com/FckKCgo.png)<br>

## Nomor 5
##### function versi sendiri yang memiliki kegunaan sama dengan function substr_count() atau string.count()
Input<br>
![alt text](https://i.imgur.com/jYaS01o.png)<br>
Output<br>
![alt text](https://i.imgur.com/58Uug0R.png)<br>

## Nomor 6
##### Tabel product_categories<br>
![alt text](https://i.imgur.com/v8G4sQD.png)<br>
##### Tabel products<br>
![alt text](https://i.imgur.com/o0xpjjf.png)<br>

##### Membuat record seperti yang ada di soal
```
select 
  product_categories.nama, 
  count(products.category_id) as jumlah_produk
from 
  product_categories 
left join 
  products 
  on (products.category_id=product_categories.id)
group by 
  product_categories.id, product_categories.nama
order by 
  product_categories.id;
```
![alt text](https://i.imgur.com/aY8kjhT.png)

## Nomor 7

##### Aplikasi website sederhana untuk menampilkan hasil query
Menggunakan Bootstrap 4.2 dan PHP<br>

![alt text](https://i.imgur.com/1pNID1j.png)

# Jawaban Tes Rekrutment Arkademy


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

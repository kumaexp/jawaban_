# Jawaban Tes Rekrutment Arkademy


### Nomor 6
##### Tabel product_categories<br>
![alt text](https://i.imgur.com/o0xpjjf.png)

Membuat record seperti yang ada di soal
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

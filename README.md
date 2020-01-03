# Search-Engine-sederhana-python
## Langkah - langkah untuk menjalankannya


1. Pastikan sudah terinstall lamp-server dan semua package yang akan kita gunakan
2. Jalankan Crawl.py untuk mengcrawling sekaligus mengambil atau menyimpan link/url

`$ python3 Crawl.py`


![](./foto/1.png)

3. Kemudian jalankan program Clean.py untuk membersihkan isi dari url yang sudah kita crawl

`$ python3 Clean.py`



![](./foto/2.png)

4. Kemudian jalankan program Score.py untuk menyimpan score dari tiap kata

`$ python3 Score.py`



![](./foto/3.png)

5. Kemudian aktifkan apache di terminal

`$ apache start`



![](./foto/4.png)

6. Buka browser, ketik `localhost/[nama folder]`
Maka akan tampil seperti di bawah ini



![](./foto/6.png)

7. Jika ingin mengubah tampilan, silahkan ubah di bagian index.php dan di folder assets

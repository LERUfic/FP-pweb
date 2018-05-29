# FP-pweb

Fitur-fitur:
- Login Pembeli dan penjual
- Pembeli bisa membeli barang
- Penjual bisa menjual banyak barang (CRUD)

Aturan Ngoding:
- Segala php yang konek ke database/pemrosesan data secara backend ditaruh di folder model.
- Seluruh asset entah javascript ,css, image dan download file user ada di folder static.
- Jika ingin membuat partial view html (modal, footer, header, sidebar) yang bisa dipakai di multi html taruh di folder base.
- Folder root berguna sebagai view utama.

Progress:
- 27 Mei 2018:
	* register: backend & frontend (ok) kurang testing aja
	* login: backend & frontend (ok) kurang testing aja
	* logout: sudah ditest (green)
	* halaman lapak: frontend sudah, backend get data belum
	* halaman toko: frontend

- 28 Mei 2018:
	* register: green
	* login: green

- 29 Mei 2018:
    * CRUD barang dagangan: green

To-Do:
- Pembeli bisa membeli barang (ubah status barang jadi 1) lalu upload bukti
- Penjual bisa melihat file bukti dan memproses barang (ubah status barang jadi 2)
- Pembeli yang menerima barang bisa merubah status barang jadi 3
- Nembuat halaman CRUD user (tipe tidak bisa diubah)

Schema Database:
- users:
    * userid
    * username
    * password
    * description
    * tipe
    * alamat
    * kontak
    * imgPath

barang
    * idbarang
    * namaBarang
    * deskripsiBarang
    * hargaBarang
    * idUser
    * imgbarang

transaksi
    * idtransaksi
    * idBarang
    * idPembeli
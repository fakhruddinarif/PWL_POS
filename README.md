# Jobsheet 3: Migration, Seeder, DB Facade, Query Builder, dan Eloquent ORM
> Nama  : Muhammad Fakhruddin Arif
>
> Kelas : TI-2F
>
> Nomor : 21

1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?
>`APP_KEY` pada file `.env` adalah kunci enkripsi digunakan untuk menjaga keamanan data sensitif dalam app
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
```php
php artisan key:generate
```
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi?
   dan untuk apa saja file migrasi tersebut?
> Membuat tabel reset, menyimpan data user, menyimpan data failed job yang terjadi pada aplikasi, dan untuk menyimpan data token personal access
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output
   dari fungsi tersebut?
> Otomatis menambahkan kolom `created_at` dan `updated_at`
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari
   fungsi tersebut?
> unsignedBigInteger
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id();
   dengan menggunakan $table->id('level_id'); ?
> Perbedaan antara `$table->id();` dan `$table->id('level_id');` dalam hasil migrasi pada tabel m_level adalah penamaan kolom primary key yang dihasilkan. Hasil jika tanpa params adalah `id` sedangkan hasil `$table->id('level_id');` adalah `level_id`.
7. Pada migration, Fungsi ->unique() digunakan untuk apa?
> Fungsi `->unique()` pada migration digunakan untuk menetapkan kolom sebagai unik, yang berarti nilainya harus unik di antara setiap baris dalam tabel, mencegah duplikasi data pada kolom tersebut.
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user
   menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id
   pada tabel m_level menggunakan $tabel->id('level_id') ?
> Kolom level_id pada tabel m_user menggunakan `$table->unsignedBigInteger('level_id')` karena kolom ini berperan sebagai foreign key yang merujuk ke kolom id pada tabel `m_level`, yang secara default bertipe unsigned big integer. Sedangkan kolom level_id pada tabel m_level menggunakan `$table->id('level_id') `sebagai primary key.
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode
   program Hash::make('1234');?
> Class Hash digunakan untuk mengenkripsi data yang akan disimpan ke dalam database. Biasanya digunakan untuk mengenkripsi password.
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa
    kegunaan dari tanda tanya (?) tersebut?
> Tanda tanya `(?)` pada query builder berperan sebagai placeholder untuk parameter yang akan diikuti saat query dieksekusi.
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table =
    ‘m_user’; dan protected $primaryKey = ‘user_id’; ?
> Penulisan protected `$table = 'm_user';` menunjukkan bahwa model terkait dengan tabel '`m_user'`, sementara protected `$primaryKey = 'user_id';` menetapkan bahwa `'user_id'` adalah primary key pada tabel tersebut.
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke
    database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan 
> Lebih mudah dengan menggunakan Eloquent ORM karena sesuai dengan konsep MVC yang membuat kode lebih mudah untuk dikelola dan dibaca

# Basic Laravel Learning (MVC)

Repository ini berisi **pengenalan dasar Laravel** dengan konsep **MVC (Model - View - Controller)**.  
Materi difokuskan ke struktur folder, routing, controller, blade view, seeder, dan menampilkan data.

---

## 🎯 Tujuan
- Paham konsep MVC di Laravel
- Bisa membuat route → controller → view
- Bisa read data dari database dan tampilkan ke Blade

---

## 🗂 Struktur Folder Laravel (Ringkas)

```text
app/            -> Logic aplikasi (Controller, Model, dll)
routes/         -> Routing aplikasi
resources/views-> File tampilan (Blade)
database/
 ├─ migrations/-> Struktur tabel database
 └─ seeders/   -> Data dummy / awal
public/         -> File yang diakses publik

```

## 🧠 Konsep MVC (Singkat & Jelas)

### 🔹 Model
- Mengatur **data & database**
- Lokasi: `app/Models`

```php
User::all(); // ambil data dari tabel users

```

### 🔹 View

Mengatur tampilan

Lokasi: resources/views

Menggunakan Blade

```php

@foreach ($users as $user)
  <p>{{ $user->name }}</p>
@endforeach

```

### 🔹 Controller

Penghubung Model ↔ View

Lokasi: app/Http/Controllers

```php

public function index() {
  $users = User::all();
  return view('users.index', compact('users'));
}

```

### 🌐 Alur Kerja Laravel (MVC)
Route → Controller → Model → Controller → View

## 🛣 Routing

Lokasi:

routes/web.php

```php

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', [BebasController::class, 'index']);
Route::get('/about/{id}', [BebasController::class, 'detail']);
```

## 🎮 Controller

Buat controller:

php artisan make:controller BebasController


Contoh:

```php

use App\Models\User;

public function index() {
  $users = User::all();
  return view('users.index', compact('users'));
}

```

## 🎨 View (Blade)

Lokasi:

resources/views/users/index.blade.php

```php
<h1>Data Siswa</h1>
@foreach ($data_siswa as $item)
  <p>{{ $item['nama_siswa'] }}</p>
@endforeach

```

## 🌱 Seeder (Data Dummy)

Lokasi:

database/seeders/


Jalankan:

php artisan migrate --seed

## ▶ Menjalankan Project

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve


Akses:

http://127.0.0.1:8000

### Author: Henokh Ivander Sitorus
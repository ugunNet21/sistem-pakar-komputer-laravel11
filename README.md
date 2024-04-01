<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Download SQLITE GUI

<a href="https://sqlitebrowser.org/dl/" target="_blank" />


## Urutan Membuat Migration

```bash
Urutan Pembuatan Migration:
Gejala

Migrasi: create_gejalas_table
Kerusakan

Migrasi: create_kerusakans_table
BiayaPerbaikan

Migrasi: create_biaya_perbaikans_table
Solusi

Migrasi: create_solusis_table
Hasil

Migrasi: create_hasils_table
Riwayat

Migrasi: create_riwayats_table

```

## Urutan Membuat Model

```bash
Gejala

Model: Gejala.php
Kerusakan

Model: Kerusakan.php
BiayaPerbaikan

Model: BiayaPerbaikan.php
Solusi

Model: Solusi.php
Hasil

Model: Hasil.php
Riwayat

Model: Riwayat.php
```

## Relasi Antar Entitas

1. Gejala (Gejala.php):
   BelongsToMany dengan Kerusakan: Satu gejala bisa menjadi indikasi dari banyak kerusakan, dan sebaliknya.
```bash



public function kerusakan()
{
    return $this->belongsToMany('App\Kerusakan', 'gejala_kerusakan', 'id_gejala', 'id_kerusakan');
}

```

2. Kerusakan (Kerusakan.php):

* BelongsToMany dengan Gejala: Satu kerusakan bisa disebabkan oleh banyak gejala, dan sebaliknya.

```bash
public function gejala()
{
    return $this->belongsToMany('App\Gejala', 'gejala_kerusakan', 'id_kerusakan', 'id_gejala');
}

```

* HasMany dengan BiayaPerbaikan: Satu kerusakan dapat memiliki banyak biaya perbaikan.
  
```bash
public function biayaPerbaikan()
{
    return $this->hasMany('App\BiayaPerbaikan', 'id_kerusakan', 'id');
}

```

* HasMany dengan Solusi: Satu kerusakan dapat memiliki banyak solusi.
```bash
public function solusi()
{
    return $this->hasMany('App\Solusi', 'id_kerusakan', 'id');
}

```

3. BiayaPerbaikan (BiayaPerbaikan.php):
* BelongsTo dengan Kerusakan: Satu biaya perbaikan terkait dengan satu kerusakan.
  
```bash
public function kerusakan()
{
    return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
}

```
4. Solusi (Solusi.php):
* BelongsTo dengan Kerusakan: Satu solusi terkait dengan satu kerusakan.
  
```bash
public function kerusakan()
{
    return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
}

```

5. Hasil (Hasil.php):
   
* BelongsTo dengan Gejala: Satu hasil diagnosis terkait dengan satu gejala.
  
```bash
public function gejala()
{
    return $this->belongsTo('App\Gejala', 'id_gejala', 'id');
}

```
* BelongsTo dengan Kerusakan: Satu hasil diagnosis terkait dengan satu kerusakan.
  
```bash
public function kerusakan()
{
    return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
}

```

* HasOne dengan Riwayat: Satu hasil diagnosis dapat memiliki satu riwayat tindakan.
  
```bash
public function riwayat()
{
    return $this->hasOne('App\Riwayat', 'id_hasil', 'id');
}

```
6. Riwayat (Riwayat.php):
   
* BelongsTo dengan Hasil: Satu riwayat tindakan terkait dengan satu hasil diagnosis.
  
```bash
public function hasil()
{
    return $this->belongsTo('App\Hasil', 'id_hasil', 'id');
}

```

## Install and fix Issue Middleware Laravel 11

* Install laravel ui
  
```bash
composer require laravel/ui
php artisan ui vue --auth
```

* Copy Kernel, provider, middlware, controller from laravel 10
* Configruration issue contorller
  
```bash
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

```

* Configuration app/bootstrap.php
  
```bash

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\isAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'admin' =>isAdmin::class,
        ]);
        // $middleware->redirectGuestsTo('/login');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# E-[X]TRA

Software Manajemen Ekskul

## Prerequisites

XAMPP

Composer Dependency Manager

GIT Client , rekomendasi [GitKraken](https://www.gitkraken.com/)

## Installation

1. Gunakan [Composer](https://getcomposer.org/download/) untuk PHP

Masukkan command ini di cmd

```bash
composer global require laravel/installer
```

2. Buat Database Baru di PHPMyAdmin dari XAMPP dengan nama db_extra

3. Clone Link [ini](https://github.com/raihanputraramd/extra.git) menggunakan GIT Client seperti GITKraken

4. Buka CommandPrompt di Folder Hasil Clone, masukkan command berikut :

```
composer install

```
5. Edit isi .env dengan informasi server anda

```
APP_NAME=E-XTRA //awalnya Laravel
APP_ENV=local
APP_KEY=      //nanti generateKey
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_e-xtra //masukkan nama db
DB_USERNAME=root //username untuk server mysql,defaultnya username = 'root' dan password = ''
DB_PASSWORD=

....
```

6. Buka cmd yang sebelumnya, masukkan command berikut :

```
php artisan key:generate
```
```
php artisan serve
```
```
php artisan migrate
```

Untuk Tutorial Lengkapnya silahkan cek [link](www.google.com)

## Usage

Jika Instalasi Sukses, bisa dicek dengan memasukkan link localhost/[PATH/E-Xtra]

## FOOTNOTES
Project ini adalah bentuk Tugas Akhir PWPB Kelas XI RPL 18/19 di SMKN 4 Bandung.

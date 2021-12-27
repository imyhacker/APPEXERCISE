## Description

STISLASIMPLE is a Package Admin Dashboard From Stisla By Muhamad Nauval Azhar, And Little bit modded this Theme by me, Make It Simply and Fast !
Requirement

Before Install This Packages, You must have a fresh laravel install.

  -  I'm here assuming you already understand how to install Laravel!
  -  Laravel UI
  -  Auth UI Bootstrap (For Auth Pages).

## How To Install ?

To install this package there are 3 important steps.
<br /> <br />
=== REMOVE ===

## First, delete some files and folders

   - Home Controller

```
app/Http/Controllers/HomeController.php

```

   - Views Folder

```
resources/views

```

=== INSTALL ===

## Second, After delete a HomeController and Views folder, next install this Packages.

Open Your Terminal And Paste This.

```
composer require arikun/stislasimple

```

=== SETUP ===

## Third, After finish install this packages, you must setup a package.

  -  Open app.php

Open app.php in folder

```
config/app.php
```

    Paste Packages Service Provider

Paste this syntax

```
  Arikun\Stislasimple\StislaServiceProvider::class

```
to

/*
 * Package Service Providers...
 */
  
 { PASTE HERE }
         
/*
 * Application Service Providers...
 */

    Open Terminal

Open Terminal again and type this command

php artisan vendor:publish

and select

Provider:  Arikun\Stislasimple\StislaServiceProvider



# Last

Last setup your database (For Login To Dashboard), and boom.

# === Disclaimer ===

All Copyright Stisla Template Muhamad Nauval Azhar <br /><br />
All Copyright Packages This Packages By Me.
<br /><br />
I'm only make this package and little bit modded.
<br /><br />
Videos How To Install
<br />
I have also made a video on how to install it.
https://www.youtube.com/watch?v=7lHiDMp4_2w

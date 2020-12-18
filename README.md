# Trs Admin

<p align="center">
    <a href="https://github.com/trsdesign/trs-admin-dev/actions">
        <img src="https://github.com/trsdesign/trs-admin-dev/workflows/tests/badge.svg" alt="Build Status">
    </a>
</p>

## Introduction

TRS Admin is a frontend scaffolding package, allowing you publish an `index` or `show` blade file for a specified resource. TRS Admin has component presets for both [Tailwind CSS](https://tailwindcss.com) and [Bootstrap](http://getbootstrap.com).

## Installation

To install this package into your project, run the follow command in your console:

```
composer require trsdesign/trs-admin
```

Once the package is installed, along with all it's dependencies, you should run the install command, specifying the CSS framework you wish to use. E.g.

```
php artisan trs-admin:install tailwind
```

This will update and install the required node dependencies for the given CSS framework publish the `trs-admin.php` config file and the `resources/views/layouts` with inline class styles matching your chosen CSS framework.

After this, you will need to install and build your frontend assets:

```
npm install && npm run dev
```

## Usage

Usage of this package is quick, simple and easy - there's just one command to run! To get started, run the following example command:

```
php artisan trs-admin:view users
```

After running, you will need to answer a few questions before the files are published:

1. What type of view do you want to make? [index, show]
2. What layout should this view extend? [app, guest]
3. What will the main content be? [table, form]

After answering these questions, a new file will be published to your `resources/views` folder in the `{resource}/{viewType}.blade.php` format. E,g,

```
users/index.blade.php
```
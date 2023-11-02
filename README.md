# Installation

1. Clone this repo from Github, note that this repo includes .env file
2. Start Laravel sail docker containers
3. Migrate and seed the database

## 1. Clone the repo

```bash
git clone https://github.com/tjodalv/filament-select-search-bug.git
```

Enter project's directory:

```bash
cd filament-select-search-bug
```

## 2. Start Laravel sail docker containers

```bash
./vendor/bin/sail up
```

## 3. Install composer dependencies

```bash
./vendor/bin/sail composer install
```

## 3. Migrate and seed the database

```bash
./vendor/bin/sail artisan migrate --seed
```

This will create sample products and default admin user to login to Filament panel.

## 4. Login to admin panel

Open admin panel at location:

```
http://localhost:1234/admin
```

Login with the default user: `test@test.com` and password `1234`.

## 5. Create new order in filament panel

In the navigation click on the Orders and then button `New order`.

On product code select field try to find product by their name. Try typing in search box 'Pepsi'. You will get message `No options match your search`.

You can only search by product code, not by product name even though that field is defined as searchable.

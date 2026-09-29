# TFA3 — POS customer and user forms

This CodeIgniter 4 project continues [TFA2](https://github.com/bonkval/TFA2). It adds validated customer and user creation, editing, and user avatar uploads. The committed `database/tfa3_pos.sql` contains the TFA2 sample records and the TFA3 avatar column. The same schema is represented by the two migrations.

## Requirements

- PHP 8.2 or newer with `intl`, `mbstring`, `mysqli`, `fileinfo`, and `gd` extensions
- Composer
- MySQL or MariaDB
- A writable `writable/` directory and `public/uploads/avatars/` directory

## Local setup

1. Run `composer install`.
2. Create a database named `tfa3_pos` using UTF-8 (`utf8mb4`).
3. Copy `.env.example` to `.env` and adjust the base URL and database settings.
4. Initialize the database using **one** of these approaches:
   - Import `database/tfa3_pos.sql` into `tfa3_pos` to get the five customers and five users from TFA2.
   - Or run `php spark migrate` followed by `php spark db:seed DatabaseSeeder` for fresh sample records.
5. Run `php spark serve` and open `http://localhost:8080/`.

If you already have a TFA2 database and want to keep its current records, point TFA3 at a **copy** of that database and run `php spark migrate`. The second migration adds the nullable `users.avatar` column.

Do not combine the SQL import with `migrate` on the same database: the SQL file already creates both tables and the avatar column.

## Pages

| Page | Purpose |
| --- | --- |
| `/customers` | List customers and open edit forms |
| `/customers/new` | Create a customer with required name and valid email |
| `/customers/{id}/edit` | Update an existing customer |
| `/users` | List users with prepared avatars or a placeholder |
| `/users/new` | Create a user with a unique username and required full name |
| `/users/{id}/edit` | Update a user and optionally upload an avatar |

Both forms redisplay submitted values and field errors when validation fails. Avatar uploads accept only JPG or PNG files up to 2 MB. CodeIgniter's image service creates a 256 × 256 image in `public/uploads/avatars/`, and the database stores only its generated filename. The upload directory is ignored by Git, so uploaded images must be copied separately when moving an existing deployment.

## Deployment

Point the web server document root at `public/`, set a production `.env` using `.env.production.example`, enable the PHP GD extension, and allow the web server to write to `writable/` and `public/uploads/avatars/`. Import the SQL file or run the migrations and seeder as described above. Set `app.baseURL` to the actual hosted URL.

Repository: [github.com/bonkval/TFA3](https://github.com/bonkval/TFA3)

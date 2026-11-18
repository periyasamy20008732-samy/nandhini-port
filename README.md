# Nandhini – Laravel Portfolio

Laravel 11+ portfolio. Content comes from `config/portfolio.php`; the contact form saves to a `messages` table.

## Setup
```bash
composer create-project laravel/laravel nandhini-portfolio
cd nandhini-portfolio
# copy every folder from this zip into the project (merge, overwrite routes/web.php)
# set DB_* in .env (MySQL: DB_CONNECTION=mysql, DB_DATABASE=portfolio ...)
php artisan migrate
php artisan serve
```
Open http://127.0.0.1:8000

## Edit content
Change `config/portfolio.php`. Replace `public/images/profile.svg` with your photo (set `photo` in the config), and project covers in `public/images/projects/` (file name = project title as a slug, e.g. `e-commerce-checkout.svg`; use .svg only, or edit the view for .jpg).

## View contact messages
`php artisan tinker` then `App\Models\Message::latest()->get();`

## Deploy
Point the web root at `public/`, set `APP_ENV=production`, `APP_DEBUG=false`, run `php artisan config:cache route:cache`.

## Pages
/ (Home), /about, /projects, /projects/{slug} (detail page per project), /experience, /skills, /contact

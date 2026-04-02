# Agent Guide for This Project

This repository is a Laravel web application with a frontend built on the Porto theme.

## Primary Reference
- Use this `AGENTS.md` file as the main project summary for agents.
- The other instruction files (`.instructions.md`, `copilot-instructions.md`) should remain short and defer to this file.

## Technology Stack
- Laravel PHP framework
- Blade templates for views
- Porto theme frontend in `public/porto`
- Bootstrap-based theme structure
- Custom CSS files in `public/porto/css/`
- Custom JavaScript files in `public/porto/js/`
- Asset helper functions via `asset('...')`
- Route helpers via `route('...')`

## Key File Locations
- `resources/views/layout/master.blade.php`: Main layout wrapper
- `resources/views/layout/partials/head.blade.php`: CSS/JS includes and metadata
- `resources/views/layout/partials/navbar2.blade.php`: Primary site navigation
- `resources/views/layout/partials/footer.blade.php`: Footer
- `public/porto/css/custom.css`: Custom theme overrides
- `public/porto/css/how_we_work.css`: Additional page-specific styling
- `public/porto/js/custom.js`: Custom frontend JavaScript behavior
- `routes/web.php`: Main route definitions

## Blade View Structure
- Blade templates use `@extends`, `@section`, `@include`, and route helper calls
- Most pages extend `layout.master`
- Special homepage view is `resources/views/home/index.blade.php`
- Module/show pages are under `resources/views/modules/show.blade.php`

## Main Route Groups
Defined in `routes/web.php`:

- `home.index` — `/`
- `home.about` — `/hakkimizda`
- `contact-us` — `/iletisim` (GET)
- `contact-us.submit` — `/iletisim` (POST)
- `home.workcube` — `/neden-workcube`
- `home.faq` — `/sss`
- `home.products-and-solutions` — `/urunler-ve-cozumler`
- `kvkk` — `/kvkk-aydinlatma-metni`
- `home.why-senkroon` — `/neden-senkroon`

Module routes:
- `modules.index` — `/{category}-modulleri` where `category` is `workcube` or `uyumsoft`
- `modules.show` — `/{category}-modulleri/{module}`

Sector routes:
- `sectors.index` — `/sektorel-uygulamalar`
- `sectors.show` — `/sektorel-uygulamalar/{slug}`

Advisor routes:
- `advisors.index` — `/danismanlik-cozumleri`
- `advisors.show` — `/danismanlik-cozumleri/{slug}`

Project routes:
- `projects.index` — `/projelerimiz`
- `projects.show` — `/projelerimiz/{slug}`

## Styling Notes
- The site uses Porto theme CSS in `public/porto/css/theme.css`, `theme-elements.css`, and skin styles
- Custom theme overrides are in `public/porto/css/custom.css` and `public/porto/css/how_we_work.css`
- Prefer adding small UI changes in custom CSS rather than editing theme core files

## Agent Guidance
- For UI updates, prefer Blade views + custom CSS
- For route or controller behavior, inspect `routes/web.php` and the referenced controller methods
- Avoid touching `vendor/` or theme vendor files unless explicitly asked
- Preserve Turkish content unless the user requests translation or language changes

# Freecasts

---

## Installation

Clone repository into your packages' folder:
```bash
git clone https://github.com/breuermarcel/freecasts.git
```

Define your package repositories: dev
```json
"repositories": [
    {
        "type":"path",
        "url": "./packages/*",
        "options": {
            "symlink": true
        }
    }
],
```

Require package:
```bash
composer require breuermarcel/freecasts
```

Migrate database:
```bash
php artisan migrate
```

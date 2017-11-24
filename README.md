#Requirements
1. Php version >=7.1

# Installation
- Clone repository
```bash
git clone ssh://gitblit.saritasa.com/simple-project/backend.git
```
- Install composer dependencies.
- Add .env from .env.example.
- Generate application key by run command
```bash
php artisan key:generate
```
- Install static dependencies
```bash
yarn
```
or
```bash
npm install
```
- Build static scripts by running
```bash
yarn run production
```
or
```bash
npm run production
```
- Configure the environment file

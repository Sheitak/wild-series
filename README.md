# Wild-Series

### First Project with Symfony

Video Symfony 09 : https://www.loom.com/share/c543f36922b244e59c5f36a7176a93b8

Video Symfony 10 : https://www.loom.com/share/2d30908e37db4ae2ae98c4a063200741

Video Symfony 11 : https://www.loom.com/share/aa5dd115b3a447bbb280995ad87ce34d

Video Symfony 12 : https://www.loom.com/share/dbbd2d4b09e249b0a38a779528cfaab1

Video Symfony 13 : https://www.loom.com/share/f6876f8c483b40c8be78cd8153cd44af

Video Symfony 14 : https://www.loom.com/share/a33ff8c81f8f4a1495a131e22fe13ea9

Video Symfony 15 : https://www.loom.com/share/90e4deb7242f492ca2d2318ef8a0d9b2

Video Symfony 16 : https://www.loom.com/share/6b95445c290e43ebbee994ca9f2facdf

Video Symfony 17 : https://www.loom.com/share/ba1feda8868f4e78bfb384a0b4f7b5a4

Video Symfony 18 : https://www.loom.com/share/4b7c75198be74199b2c783ae087467ec

# Project installation

## 1. Configure your environment

- Duplicate ".env" file and rename the duplicated file ".env.local"

- Customize the DATABASE_URL variable.

(Replace user & password in the example below)

```
DATABASE_URL=mysql://<user>:<password>@127.0.0.1:3306/wildseries?serverVersion=5.7
```

## 2. Install PHP dependencies

```
composer install
```

## 3. Import the datas

- Remove existing database

```
php bin/console doctrine:database:drop --force
```

- Create new database

```
php bin/console doctrine:database:create
```

- Import the database

```
php bin/console doctrine:database:import db.sql
```

## 4. Install JS dependencies

```
yarn install
```

## 5. Build Webpack JS & CSS source files

```
yarn dev
```

## 6. Start dev server

```
symfony server:start
```

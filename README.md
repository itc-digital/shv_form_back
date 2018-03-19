# Сайт школы выживания 2018

## Как развернуть?

### Склонировать репозиторий

Подключитесь к вашему хостингу через SSH. Введите в терминале:

```
git clone https://github.com/reu-itc/shv_form_back.git path/to/site
```
... где `path/to/site` - корневая директория вашего сайта

### Создать базу данных с таблицей

Создайте базу данных MySQL и выполните в ней следующий SQL-запрос:

```
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE records (
  id int(11) NOT NULL,
  fio varchar(1024) COLLATE utf8_bin NOT NULL,
  fakultet varchar(1024) COLLATE utf8_bin NOT NULL,
  kurs varchar(1024) COLLATE utf8_bin NOT NULL,
  groupa varchar(1024) COLLATE utf8_bin NOT NULL,
  phone varchar(1024) COLLATE utf8_bin NOT NULL,
  vkLink varchar(1024) COLLATE utf8_bin NOT NULL,
  experience varchar(1024) COLLATE utf8_bin NOT NULL,
  otherExperience varchar(1024) COLLATE utf8_bin NOT NULL,
  inventoryAvailiable varchar(1024) COLLATE utf8_bin NOT NULL,
  fitnessLevel varchar(1024) COLLATE utf8_bin NOT NULL,
  diseases varchar(1024) COLLATE utf8_bin NOT NULL,
  allergies varchar(1024) COLLATE utf8_bin NOT NULL,
  yourTrip varchar(1024) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE records
  ADD PRIMARY KEY (id);

ALTER TABLE records
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;
```

### Прописать имя БД, логин и пароль учетной записи БД

Подключитесь через SSH к вашему хостигу и откройте директорию с вашим сайтом:

```
cd path/to/site
```
Создайте файл `config.ini`:

```
touch config.ini
```

Затем откройте в редакторе `nano` файл `config.ini`:

```
nano config.ini
```

В файле будет следующее содержимое:

```
[globals]

DEBUG=3
UI=ui/
AUTOLOAD=autoload/
email=
db_host=
db_name=
db_user=
db_pwd=
```

Пропишите все данные для вашей БД:
* `db_host` - хост БД (обычно localhost)
* `db_name` - имя БД
* `db_user` - учетная запись пользователя БД
* `bd_pwd` - пароль от учетной записи пользоваьтеля БД

Так же не забудьте прописать e-mail, на который будет отправляться письмо с заявкой.

Чтобы сохранить изменения, нажмите `Ctrl+O`, `Enter`. Чтобы выйти из редактора - `Ctrl+X`.

Усё!!! 



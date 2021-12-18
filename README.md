### Лабораторная №10 Docker (Nginx + PHP-FPM + MySQL)

#### Связка Nginx + PHP-FPM

Сборка:

<a href="https://ibb.co/r5Zfw4p"><img src="https://i.ibb.co/frCGx4N/1.png" alt="1" border="0"></a>

В Docker Desktop:

<a href="https://ibb.co/JHq8xxv"><img src="https://i.ibb.co/89bGzzr/2.png" alt="2" border="0"></a>
<a href="https://ibb.co/d28MZ2F"><img src="https://i.ibb.co/NjcCRj5/3.png" alt="3" border="0"></a>
<a href="https://ibb.co/R77fKLG"><img src="https://i.ibb.co/HXX6ymL/4.png" alt="4" border="0"></a>

Перейдём по http://docker.lab/ или localhost (index.php имеет содержимое <?php phpinfo();):

<a href="https://ibb.co/1M6xZ1K"><img src="https://i.ibb.co/5kFVTmv/5.png" alt="5" border="0"></a>

PHP-FPM:

<a href="https://ibb.co/4FBdPxS"><img src="https://i.ibb.co/XWm8ST5/6.png" alt="6" border="0"></a>

MySQL:

<a href="https://ibb.co/nfcKQ2T"><img src="https://i.ibb.co/4MT04yc/7.png" alt="7" border="0"></a>

PHP Variables:

<a href="https://ibb.co/3BF7NtL"><img src="https://i.ibb.co/dGpr2nz/8.png" alt="8" border="0"></a>
<a href="https://ibb.co/ypsq7Gg"><img src="https://i.ibb.co/T1htdpP/9.png" alt="9" border="0"></a>
<a href="https://ibb.co/HT2zhjb"><img src="https://i.ibb.co/GQJ2Hq8/10.png" alt="10" border="0"></a>

Логи:

<a href="https://ibb.co/M8G37fD"><img src="https://i.ibb.co/5YnfLkW/11.png" alt="11" border="0"></a>

#### Связка PHP-FPM + MySQL

Посмотрим все запущенные контейнеры и подключимся к MySQL контейнеру по его id:

<a href="https://ibb.co/XJgztmK"><img src="https://i.ibb.co/88pj9Ff/1a.png" alt="1a" border="0"></a>

Зайдём через root пользователя по установленному в docker-compose паролю:

<a href="https://imgbb.com/"><img src="https://i.ibb.co/n3bNCLV/2a.png" alt="2a" border="0"></a>

Посмотрим список баз данных. Среди них есть dbname, которая была указана в docker-compose. Сделаем её базой данных по умолчанию:

<a href="https://imgbb.com/"><img src="https://i.ibb.co/tmCVPpQ/3a.png" alt="3a" border="0"></a>

Создадим таблицу test и добавим туда данные:

<a href="https://imgbb.com/"><img src="https://i.ibb.co/sCBbc1c/4a.png" alt="4a" border="0"></a>

Чтобы продемонстрировать работу связки PHP-FPM + MySQL поменяем содержимое index.php на следующее:

<a href="https://imgbb.com/"><img src="https://i.ibb.co/4Fq0jwv/5a.png" alt="5a" border="0"></a>

Происходит подключение к базе данных dbname через root пользователя и по установленному в docker-compose паролю, далее выполняется select-запрос из таблицы test с выводом каждой найденной записи на отдельную строку.

<a href="https://imgbb.com/"><img src="https://i.ibb.co/nPbWPws/6a.png" alt="6a" border="0"></a>
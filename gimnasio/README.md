## POWER GYM

## Descripción
Página web donde el gimnasio puede llevar un control de los planes que ofrece el gimnasio, los pagos de los clientes, pueden checar entrada y salida los clientes, dar de alta a los nuevos clientes

## Autor
José Rocha

## Instalación
1. Para abrir este proyecto se necesita tener instalado XAMPP: https://www.apachefriends.org/es/download.html
2. Este proyecto tiene que estar dentro de *C:/xampp/htdocs/*
3. Una vez instalado XAMPP se tiene que abrir el panel de control de xampp y activar **Apache** y **MySQL**.
4. Una vez activadas las opciones abrimos el navegador de nuestra preferencia y escribimos *localhost/phpmyadmin* para abrir la base de datos.
5. Una vez abierto el panel de *phpMyAdmin* creamos una base de datos llamada **gym** del tipo **utf8_spanish2_ci**.
6. Después de crear la base de datos buscamos la opción de **importar**, buscamos la base de datos que viene dentro de la carpeta **BD** de este proyecto y damos clic en **importar**.
7. Después de haber importado la base de datos abrimos una nueva pestaña y escribimos **localhost/gimnasio/index.php** para visualizar el proyecto.

## Notas
1. El usuario de phpMyAdmin tiene que ser *root* y *no debe de tener contraseña*, en caso de que el usuario y contraseña sean diferentes se tiene que modificar el archivo **config.php** que se encuentra dentro de la carpeta *admin/*.
2. La cuenta del proyecto es:

   **Administrador**
   
   *Usuario:*
   admin

   *Contraseña:*
   password

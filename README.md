# Probar métodos de APIS

Primero creamos el proyecto, antes que todo, debemos ver que la 
versión de PHP sea mayor o igual a 7.3, para evitar conflictos, si queremos actualziar uno de los métodos es reinstalar xampp o el que uses.

```
ver la versión de php
-> php -v
```


Luego procedemos a crear el proyecto en laravel, lo hacemos a través del instalador de laravel *(debemos tener composer instalado)


```
Instalando instalador de laravel
-> composer global require laravel/installer
```


Después de esa instalación creamos el proyecto


```
Creando proyecto laravel
-> laravel new NOMBRE_DEL_PROYECTO
```


Dejamos que se cree el proyecto y una vez hay terminado nos saldrá lo siguiente *(Lo importante es mensaje final para ver si se creó correctamente).


![](images/finish.jpg)


Una vez el proyecto se haya creado de forma correcta accedemos a la carpeta donde se creó.


```
accediendo a la carpeta y abriendo con el editor *(sólo VC)
-> cd NOMNRE_DEL_PROYECTO_CREADO
--------------------------------------------------------------------
una vez dentro de la carpeta del proyecto ponemos lo siguiente y nos abre en code
-> code .
```


Ahora, debemos tener al menos XAMPP para nuestra base de datos, si tenemos configurado para abrir la consola de MySql, entonces ponemos lo siguiente.


```
accediendo a la consola de MySql
-> mysql -u root -p
```


Si no tenemos para abrir MySql entonces buscamos en la siguiente ruta *(Depende donde esté instalado xampp, si lo tienes en el disco ' C ' hazlo igual)


```
ruta para ejecutar MySql de xampp
-> c:\> cd xampp/mysql/bin
-------------------------------------------
ya estando dentro de bin ponemos lo siguiente y damos enter
-> mysql.exe -u root -p
```


Nos mostrará la consola de MySql


![](images/mysq.jpg)


Y creamos nuestra base de datos


```
creando base de datos y accediendo 
-> create database NOMBRE_DE_LA_BASE_DATOS;
-----------------------------------------------
-> use NOMBRE_DE_LA_BASE_DATOS_CREADA;
accediendo
```


![](images/crearDB.jpg)


Ahora, ya que tenemos la base de datos, vamos a configurar el fichero .env de laravel, donde vamos a poner nuestras credenciales para la base de datos.


![](images/env.jpg)


Reemplazamos el usuario y ponemos una contraseña si es que usamos, de lo contrario solo ponemos el nombre de la base de datos que creamos anteriormente en :package: DB_DATABASE = NOMBRE DE LA BASE DE DATOS CREADA

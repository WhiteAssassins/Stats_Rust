# Stats_Rust
# Español
Pagina de Estadisticas de Rust compatible con php 8.0
# Requerimientos
* Mysql Server
* Apache Server 
* Rust Server
* Oxide Rust
# Instalación
* 1 Instale su servidor Mysql y Apache le Recomiento Xampp https://www.apachefriends.org/es/download.html
* 2 Descarge e Instale Oxide en su Servidor de Rust https://umod.org/download
* 3 Cree una base de datos en su mysql llamada rust
* 4 Inicie su servidor de rust e instale los plugins PlayerDatabase y StatisticsDB
* Su Archivo de Configuración de PlayerDatabase debe quedar de la siguiente manera
```bash
{
  "Data Type : 0 (Files) or 1 (SQLite) or 2 (MySQL)": 2,
  "MySQL - Database Name": "rust",
  "MySQL - Host": "localhost",
  "MySQL - Password": "",
  "MySQL - Port": 3306,
  "MySQL - Username": "root",
  "MySQL/SQLite - Database Table Name": "PlayerDatabase",
  "SQLite - Database Name": "playerdatabase.db"
}
```
* 5 Su Archivo de Configuración de StatisticsDB debe quedar de la siguiente Manera
```bash
{
  "Debug": true,
  "Inactive Entry Lifetime": 259200,
  "Collect Joins": true,
  "Collect Leaves": true,
  "Collect Kills": true,
  "Collect Deaths": true,
  "Collect Suicides": true,
  "Collect Shots": true,
  "Collect Headshots": true,
  "Collect Experiments": true,
  "Collect Recoveries": true,
  "Collect Voice Bytes": true,
  "Collect Wounded Times": true,
  "Collect Crafted Items": true,
  "Collect Repaired Items": true,
  "Collect Lift Usages": true,
  "Collect Wheel Spins": true,
  "Collect Hammer Hits": true,
  "Collect Explosives Thrown": true,
  "Collect Weapon Reloads": true,
  "Collect Rockets Launched": true,
  "Collect Collectible Pickups": true,
  "Collect Plant Pickups": true,
  "Collect Gathered": true
}
```
* 6 Edite el archivo en la siguiente dirección application/config/config.php en la linea 28 ponga la dirección de su pagina ejem 
```bash
$config['base_url'] = "http://estadisticasrust.com/";
```
* 7 Edite el archivo en la siguiente dirección application/views/navbar.php y en la linea 2 ponga los datos de su servidor
* 8 Disfrute de su Pagina

# English
Rust Statistics page compatible with php 8.0
# Requeriments
* Mysql Server
* Apache Server 
* Rust Server
* Oxide Rust
# Installation
* 1 Install your Mysql server and Apache I recommend Xampp https://www.apachefriends.org/es/download.html
* 2 Download and Install Oxide on your Rust Server https://umod.org/download
* 3 Create a database in your mysql called rust
* 4 Start your rust server and install the PlayerDatabase and StatisticsDB plugins
* Your PlayerDatabase Configuration File should be as follows
```bash
{
  "Data Type : 0 (Files) or 1 (SQLite) or 2 (MySQL)": 2,
  "MySQL - Database Name": "rust",
  "MySQL - Host": "localhost",
  "MySQL - Password": "",
  "MySQL - Port": 3306,
  "MySQL - Username": "root",
  "MySQL/SQLite - Database Table Name": "PlayerDatabase",
  "SQLite - Database Name": "playerdatabase.db"
}
```
* 5 Your StatisticsDB Configuration File should be as follows
```bash
{
  "Debug": true,
  "Inactive Entry Lifetime": 259200,
  "Collect Joins": true,
  "Collect Leaves": true,
  "Collect Kills": true,
  "Collect Deaths": true,
  "Collect Suicides": true,
  "Collect Shots": true,
  "Collect Headshots": true,
  "Collect Experiments": true,
  "Collect Recoveries": true,
  "Collect Voice Bytes": true,
  "Collect Wounded Times": true,
  "Collect Crafted Items": true,
  "Collect Repaired Items": true,
  "Collect Lift Usages": true,
  "Collect Wheel Spins": true,
  "Collect Hammer Hits": true,
  "Collect Explosives Thrown": true,
  "Collect Weapon Reloads": true,
  "Collect Rockets Launched": true,
  "Collect Collectible Pickups": true,
  "Collect Plant Pickups": true,
  "Collect Gathered": true
}
```
* 6 Edit the file in the following address application / config / config.php in line 28 put the address of your page 
```bash
$config['base_url'] = "http://estadisticasrust.com/";
```
* 7 Edit the file in the following address application / views / navbar.php and in line 2 put the data of your server
* 8 Enjoy your Page

# Adicional
* Discord https://discord.gg/r3RcQ8vb
* Instagram https://www.instagram.com/whiteassassins/
* Twitter https://twitter.com/Christo95776133/

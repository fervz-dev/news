<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'columnas';
$active_record = TRUE;
////wwwcont_banners
$db['banners']['hostname'] = 'localhost';
$db['banners']['username'] = 'root';
$db['banners']['password'] = '';
$db['banners']['database'] = 'wwwcont_banners';
$db['banners']['dbdriver'] = 'mysql';
$db['banners']['dbprefix'] = '';
$db['banners']['pconnect'] = TRUE;
$db['banners']['db_debug'] = TRUE;
$db['banners']['cache_on'] = FALSE;
$db['banners']['cachedir'] = '';
$db['banners']['char_set'] = 'utf8';
$db['banners']['dbcollat'] = 'utf8_general_ci';
$db['banners']['swap_pre'] = '';
$db['banners']['autoinit'] = TRUE;
$db['banners']['stricton'] = FALSE;

////wwwcont_columnas
$db['columnas']['hostname'] = 'localhost';
$db['columnas']['username'] = 'root';
$db['columnas']['password'] = '';
$db['columnas']['database'] = 'wwwcont_columnas';
$db['columnas']['dbdriver'] = 'mysql';
$db['columnas']['dbprefix'] = '';
$db['columnas']['pconnect'] = TRUE;
$db['columnas']['db_debug'] = TRUE;
$db['columnas']['cache_on'] = FALSE;
$db['columnas']['cachedir'] = '';
$db['columnas']['char_set'] = 'utf8';
$db['columnas']['dbcollat'] = 'utf8_general_ci';
$db['columnas']['swap_pre'] = '';
$db['columnas']['autoinit'] = TRUE;
$db['columnas']['stricton'] = FALSE;

////wwwcont_imagen
$db['imagen']['hostname'] = 'localhost';
$db['imagen']['username'] = 'root';
$db['imagen']['password'] = '';
$db['imagen']['database'] = 'wwwcont_imagen';
$db['imagen']['dbdriver'] = 'mysql';
$db['imagen']['dbprefix'] = '';
$db['imagen']['pconnect'] = TRUE;
$db['imagen']['db_debug'] = TRUE;
$db['imagen']['cache_on'] = FALSE;
$db['imagen']['cachedir'] = '';
$db['imagen']['char_set'] = 'utf8';
$db['imagen']['dbcollat'] = 'utf8_general_ci';
$db['imagen']['swap_pre'] = '';
$db['imagen']['autoinit'] = TRUE;
$db['imagen']['stricton'] = FALSE;

////wwwcont_noticias
$db['noticias']['hostname'] = 'localhost';
$db['noticias']['username'] = 'root';
$db['noticias']['password'] = '';
$db['noticias']['database'] = 'wwwcont_noticias';
$db['noticias']['dbdriver'] = 'mysql';
$db['noticias']['dbprefix'] = '';
$db['noticias']['pconnect'] = TRUE;
$db['noticias']['db_debug'] = TRUE;
$db['noticias']['cache_on'] = FALSE;
$db['noticias']['cachedir'] = '';
$db['noticias']['char_set'] = 'utf8';
$db['noticias']['dbcollat'] = 'utf8_general_ci';
$db['noticias']['swap_pre'] = '';
$db['noticias']['autoinit'] = TRUE;
$db['noticias']['stricton'] = FALSE;

////wwwcont_videos
$db['videos']['hostname'] = 'localhost';
$db['videos']['username'] = 'root';
$db['videos']['password'] = '';
$db['videos']['database'] = 'wwwcont_videos';
$db['videos']['dbdriver'] = 'mysql';
$db['videos']['dbprefix'] = '';
$db['videos']['pconnect'] = TRUE;
$db['videos']['db_debug'] = TRUE;
$db['videos']['cache_on'] = FALSE;
$db['videos']['cachedir'] = '';
$db['videos']['char_set'] = 'utf8';
$db['videos']['dbcollat'] = 'utf8_general_ci';
$db['videos']['swap_pre'] = '';
$db['videos']['autoinit'] = TRUE;
$db['videos']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */
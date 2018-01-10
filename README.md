# Mashup

A PHP webapp that fetches the news headlines of various cities and shows them on an interactive map.
It can be built for any country depending upon data of cities present using Google Maps API and Google News RSS feed.

### Using the app :
- Install Apache
- Install MySQL
- Run your apache server
- Run Mysql server


### Configuring the database :
- Make a new database with any name and use PHPmyadmin interface to run the sql code in pset7.sql
- Make a new file config.json and add the following lines :

```
{
    "database": {
        "host": "localhost",
        "name": "database_name",
        "username": "your_mysql_username",
        "password": "your_mysql_password"
    }
}
```


### Information about cities :
- Data about cities is taken from [GeoNames](http://download.geonames.org/)
- [Readme](http://download.geonames.org/export/zip/readme.txt) for GeoNames Postal Codes 


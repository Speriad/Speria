@echo off
"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysql.exe" --defaults-file="C:\Bitnami\wampstack-8.0.9-0/mariadb\my.ini" -u root -e "DELETE FROM mysql.user WHERE User='';"
"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysql.exe" --defaults-file="C:\Bitnami\wampstack-8.0.9-0/mariadb\my.ini" -u root -e "SET Password=password('%1');"


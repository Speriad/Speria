@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysqld.exe" --install "wampstackMariaDB-1" --defaults-file="C:\Bitnami\wampstack-8.0.9-0/mariadb\my.ini"

net start "wampstackMariaDB-1" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "wampstackMariaDB-1" >NUL
"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysqld.exe" --remove "wampstackMariaDB-1"

:end
exit

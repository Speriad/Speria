@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysqld.exe" --install "wampstackMariaDB" --defaults-file="C:\Bitnami\wampstack-8.0.9-0/mariadb\my.ini"

net start "wampstackMariaDB" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "wampstackMariaDB" >NUL
"C:\Bitnami\wampstack-8.0.9-0/mariadb\bin\mysqld.exe" --remove "wampstackMariaDB"

:end
exit

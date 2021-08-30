@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/Bitnami/wampstack-8.0.9-0/apache2\bin\httpd.exe" -k install -n "wampstackApache-1" -f "C:/Bitnami/wampstack-8.0.9-0/apache2\conf\httpd.conf"

net start wampstackApache-1 >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop wampstackApache-1 >NUL
"C:/Bitnami/wampstack-8.0.9-0/apache2\bin\httpd.exe" -k uninstall -n "wampstackApache-1"

:end
exit

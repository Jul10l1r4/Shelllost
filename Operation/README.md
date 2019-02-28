# Operations
* Reicev POST or GET
* Capture router path
* Capture Addres Ip
* Capture User-agent
* Find logs file of server
* No find? Use the grep recursive 1° in /var/log if no in /
* If find logs then Exec commands
* Replace Path, user agent, and Ip
# Server Targets
* Nginx   → /var/log/nginx/{access.log, error.log, warning.log}
* Apache  → /var/log/apache2/{access.log, error.log, warning.log}
* Native language
# Replace using sed, regex

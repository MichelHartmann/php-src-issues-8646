# How to reproduce

1. Edit the `Dockerfile` in order to select the desired PHP version
2. Build the image and start the stack  
   This will create some classes on the fly (see `generate_classes.php` for details)  
    ````shell
    docker-compose up --build 
    ````

3. Create some load  
    ````shell
    ab -n 1000 -c 10 http://localhost:8080/
    ````

4. Monitor the memory usage  
   ````shell
   docker stats
    ````
   
5. Repeat with another PHP version

# My results
## php:8.0.27-fpm-alpine
* Directly after start: 6.301MiB
* After one request: 9.5MiB
* After 1,001 requests:  37.05MiB
* After 11,001 requests: 37.05MiB

## php:8.1.14-fpm-alpine
* Directly after start: 6.633MiB
* After one request: 15.77MiB
* After 1,001 requests:  59.54MiB
* After 11,001 requests: 274MiB
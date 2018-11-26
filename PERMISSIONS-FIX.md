# Permissions fix for media management
## Fixing permissions
Connect to your running __wordpress-php__ docker container.  
You would do this with a command similar to this:
```
$ docker exec -it my_wordpress_project_php /bin/bash
```
After you've connected, make sure to log in as __root__:
```
$ sudo -s
```
Now you will want to `cd` into the proper media files directory  
and change the directory and file ownership/permissions like so:
```
# cd wp-content/uploads/         # Change directory
# chown -R www-data:www-data .   # Change ownership of all children files and directories
# chmod 775 $( find . -type d )  # Change permissions of directories
# chmod 664 $( find . -type f )  # Let's also change the file permissions
                                 # for good measure (probably unnecessary)
```

## Handy (almost) one-liner to copy/paste
Execute the following two lines after you've connected to your __wordpress-php__ docker container:
```
sudo -s  # First, gain root access, then execute the following one-liner:
cd wp-content/uploads/ && ( chown -R www-data:www-data . && chmod 775 $(find . -type d) && files=($(find . -type f)); [ ${#files[@]} -gt 0 ] && chmod 664 ${files[@]} && unset files; echo "DONE" )
```

echo "Starting initiation scripts..."


# PERIODICALLY CHECK IF DB STARTED
printf "Waiting MySQL to initialize for $PROJECT($PROTOCOL://$DOMAIN) ..."

# In seconds
timeout=60
wait=2

try=0
is_ready=false
while [[ $is_ready == false ]] && [[ $try -lt $timeout ]];do

    let try=try+wait

    if wp --allow-root --skip-plugins --skip-themes --skip-packages db check &>/dev/null;then
        is_ready=true
        echo " started"
    elif [[ $try -ge $timeout ]];then
        echo " timeout"
        exit 1
    else
        printf "."
        sleep $wait
    fi

done

# Actions after DB started
bash /var/www/config/scripts/after_db_started.sh


# PERIODICALLY CHECK IF DB INSTALLED
printf "Waiting DB installation to be done ..."

# Longer timeout for complex DB Search/Replace works (in seconds)
timeout=600
wait=2

try=0
is_ready=false
while [[ $is_ready == false ]] && [[ $try -lt $timeout ]];do

    let try=try+wait

    if [[ -f /var/www/db_installed ]];then
        is_ready=true
        echo " installed"
    elif [[ $try -ge $timeout ]];then
        echo " timeout"
        exit 1
    else
        printf "."
        sleep $wait
    fi

done

# Actions after DB installation
bash /var/www/config/scripts/after_db_installation.sh

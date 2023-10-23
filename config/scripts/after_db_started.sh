# Check if the site has installed
if ! wp --allow-root core is-installed; then

	echo "Site is being installed..."


	# Fresh Core Install
	wp --allow-root core install --url=${PROTOCOL}://${DOMAIN} --title=${PROJECT} --admin_user=admin --admin_password=password --admin_email=admin@wprun.net --skip-email


	# Auto import if core is just installed and latest DB file exists
	DB_FILE=/var/www/db/latest.sql
	if [[ -f $DB_FILE ]];then
		wp --allow-root db import $DB_FILE
	fi

	touch /var/www/db_installed


else

	echo "Site already installed"
	touch /var/www/db_installed

fi

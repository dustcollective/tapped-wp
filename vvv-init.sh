echo "Creating database 'tappedleeds' (if it does not exist)..."

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`tappedleeds\`"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON \`tappedleeds\`.* TO wp@localhost IDENTIFIED BY 'wp';"

if [ ! -d "html" ]; then
	echo 'Installing WordPress (release version) in tappedleeds/html...'
	mkdir ./html
cd ./html
	wp core download --allow-root 
	wp core config --dbname="tappedleeds" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
	wp core install --url=tappedleeds.dev --title="tappedleeds - A WordPress Site" --admin_user=admin --admin_password=password --admin_email=demo@example.com --allow-root
		cd -
else
	echo 'Updating WordPress in tappedleeds/html...'
	wp core update --allow-root
	wp core update-db --allow-root
fi

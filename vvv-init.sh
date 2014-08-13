echo "Creating database 'tappedbrewco' (if it does not exist)..."

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`tappedbrewco\`"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON \`tappedbrewco\`.* TO wp@localhost IDENTIFIED BY 'wp';"

if [ ! -d "html" ]; then
	echo 'Installing WordPress (release version) in tappedbrewco/html...'
	mkdir ./html
cd ./html
	wp core download --allow-root 
	wp core config --dbname="tappedbrewco" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
	wp core install --url=tappedbrewco.dev --title="tappedbrewco - A WordPress Site" --admin_user=admin --admin_password=password --admin_email=demo@example.com --allow-root
		cd -
else
	echo 'Updating WordPress in tappedbrewco/html...'
	wp core update --allow-root
	wp core update-db --allow-root
fi

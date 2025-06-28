-- Create the database if it doesn't exist (optional, as MariaDB env vars might do this)
CREATE DATABASE IF NOT EXISTS nextcloud CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Grant all privileges to the 'ncuser' on the 'nextcloud' database
-- IMPORTANT: Replace 'your_ncuser_password' with the actual password
-- that you've configured for your Nextcloud user in your docker-compose.yml
GRANT ALL PRIVILEGES ON nextcloud.* TO 'ncuser'@'%' IDENTIFIED BY 'your_ncuser_password';

FLUSH PRIVILEGES;

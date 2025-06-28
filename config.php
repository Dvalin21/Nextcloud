Run the following command and paste into the config.php file:
```
sudo docker exec -it nextcloud nano config/www/nextcloud/config/config.php
```


  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'port' => 6379,
    'password' => '', // Will be empty if REDIS_PASSWORD env var was empty
    'dbindex' => 0,
  ),
  'trusted_proxies' =>
  array (
    0 => '10.0.0.27', // **THE IP ADDRESS OF YOUR ZORAXY OR NGINX SERVER**
  ),
  'overwriteprotocol' => 'https',
  'overwritecliurl' => 'https://your.nextcloud.domain.com',
  'overwritehost' => 'your.nextcloud.domain.com',
  'default_phone_region' => 'US',

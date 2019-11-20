# Laravel 6 Core Concepts Demo



To test this demo do the following:

You must have a __.env__ file in the /laravel/ directory to inform laravel about the DB connections
and the BROADCAST_DRIVER should be redis for development.

Service hostname variables need to match the hostnames inside the container network environment so:

```bash
REDIS_HOST=redis
REDIS_CLIENT=predis # predis is the client for this demo
```
`DB_HOST=mysqldb`

__note__: This is assuming Docker and Docker-Composer are installed and this is a Unix machine

---

### 1. Clone the project
```bash
git clone https://github.com/jbool24/laravel6-demo.git
```

### 2. (Optional) Manual Install dev dependencies (composer and npm/yarn must be installed)
  __note__: laravel container will auto install js and php dependencies on first run if they are not present.
  ```bash
  cd laravel && npm install && composer install
  ```

  -or-

  ```bash
  cd laravel && yarn install && composer install
  ```

### 3. Build and Run containers ( Must be in project root )
  ```bash
  npm run start:dev
  ```

  -or-

  ```bash
  yarn start:dev
  ```
  
### 4. [Re]Build frontend (node_modules must be present -- check this first if build fails)
  __note__: laravel container will auto install js and php dependencies on first run if they are not present.
  ```bash
  cd laravel && npm run prod
  ```

  -or-

  ```bash
  cd laravel && yarn prod
  ```
  
### 5. Run migrations to prime the DB

  ```bash
  cd laravel # if current working dir not /laravel/
  npm run db:migrate && npm run app:genKey
  ```

  -or-

  ```bash
  cd laravel # if current working dir not /laravel/
  yarn db:migrate && yarn app:genKey
  ```
__note__ if broadcast updates not working try running `yarn app:reset-servers` to restart nginx and socket server.
The containers may have started out of order causing a failure to connect. (future improvement to startup script)

### 6. Stop and cleanup
  ```bash
  npm run stop
  ```

  -or-

  ```bash
  yarn stop
  ```

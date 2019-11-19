# Laravel 6 Core Concepts Demo



To test this demo do the following:

You must have a __.env__ file in the /laravel/ directory to inform laravel about the DB connections
and the BROADCAST_DRIVER should be redis for development.

Service hostname variables need to match the hostnames inside the container network environment so:

```
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

### 2. Install dev dependencies (composer and npm/yarn must be installed)
  ```bash
  cd laravel && npm install && composer install && npm run prod
  ```

  -or-

  ```bash
  cd laravel && yarn install && composer install && yarn prod
  ```

### 3. Build and Run containers ( Must be in project root )
  ```bash
  npm run start:dev
  ```

  -or-

  ```bash
  yarn start:dev
  ```

### 4. Stop and cleanup
  ```bash
  npm run stop
  ```

  -or-

  ```bash
  yarn stop
  ```

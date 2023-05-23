<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Install Composer on ur system install php as well

git cloe the app or download the app
1. git clone 'url' or manually download zip project and extract

give proper name to the project
run
docker-compose -f docker-compose .yml up -d

all ur services wll start running on docker webserver(nginx), mysql,phpmyadmin, project image build by dockerfile
to makes change on ur docker composer file bting down ur composer.yml file

docker-compose down

2. composer install
3. npm install   optional 
4. npm run dev   optional
5. To make duplicate of .env.example: cp .env.example .env
6. php artisan key:generate
7. php artisan migrate
8.
 Seed database as well in this order

1. php artisan db:seed --class=DepartmentTableSeeder

2. php artisan db:seed --class=FuelstationSeeder
3. php artisan db:seed --class=PermissionTableSeeder
4. php artisan db:seed --class=UsersTableSeeder

 php artisan serve

 Push your app to Github accout

 git init, git add . git remote -v git status, git
 Or you are trying to create a new GitHub project.

GitHub replaced master with main as the default branch name. To resolve the issue:
On your local project:
remove the .git folder if it exists
recreate a clean repository by launching the following in your project:
In the terminal:
git init
git add .
git commit -m "First commit"
git branch -M main
git remote add origin https://github.com/judexco/Fueltrackmgt.git
git push -u origin main

Build your App,
docker buil -t fueltracksystem:v1 .    or :latest
then you can create network, by default with docker-compose.yml network is created
docker network create network_name   in this case no need app image is already running with DB using default network created fueltracksystem_default

Now to push the image to Docker Registery which is ur docker hub account
docker login
docker tag fueltracksystem-app:v1 jerryjude/fueltracksystem:v1
docker push jerryjude/fueltracksystem:v1
image pushed to docker hub registry

docker pull jerryjude/fueltracksystem:v1      to pull this on another system
then run 
docker run image_name up      to start the image in a container boom the will up and running

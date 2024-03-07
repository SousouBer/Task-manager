<div>
	<div align="center">
	<img width="300" src="https://3040593345-files.gitbook.io/~/files/v0/b/gitbook-x-prod.appspot.com/o/spaces%2FwJ6ZQDeSoLTHwTIMhyeb%2Fuploads%2FbgOiWcCNyQMZfd120C68%2Fdepositphotos_406412896-stock-illustration-vector-check-list-stopwatch-efficiency.jpg?alt=media&token=18c3ff8a-5da3-4796-bbf3-6d1b9e8383ca">
	</div>
	<h1>Task Management Application</h1>
</div>

Task management application is the platform which allows people to manage their tasks. In the application. a registered user can add, edit, or delete a task, view the detailed information, see the exact date when it was created, and the date when the task should be completed. Moreover, the application provides an opportunity to update the user's profile, add or change profile pictures.

#

### Table of Contents

-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Migrations](#migration)
-   [Development](#development)
-   [Project Structure](#project-structure)
-   [Resources](#resources)

#

### Prerequisites

-   *PHP@8.3 and up*
-   _Laravel@10_
-   _MYSQL@8 and up_
-   _npm@10 and up_
-   _composer@2 and up_
-   _NodeJS@18 and up_

#

### Tech Stack

-   [Laravel@10.x](https://laravel.com/docs/10.x) - Back-end framework
-   [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#

### Getting Started

1\. Firstly, you need to clone Task Management Application repository from github:

```sh
git clone https://github.com/RedberryInternship/task-manager-soso-beriashvili.git
```

2\. Next step requires you to run _composer install_ in order to install all the dependencies:

```sh
composer install
```

3\. After installing all the PHP dependencies, now install all the Javascript dependencies:

```sh
npm install
```

and then:

```sh
npm run dev
```

in order to build your JS/SaaS resources.

4\. Now you need to set your env file. Go to the root of your project and execute the following command.

```sh
cp .env.example .env
```

And now you should provide **.env** file all the necessary Database variables:

#

**MYSQL:**

> DB_CONNECTION=mysql

> DB_HOST=127.0.0.1

> DB_PORT=3306

> DB_DATABASE=**\***

> DB_USERNAME=**\***

> DB_PASSWORD=**\***

After setting up **.env** file, execute this command in order to cache environment variables:

```sh
php artisan config:cache
```

4\. Now execute in the root of you project following:

```sh
  php artisan key:generate
```

Which generates auth key.

#

### Migration

Having completed getting started section, migrating database is quite simple, just execute:

```sh
php artisan migrate
```

#

### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

And you need to run the following command at well:

```sh
  npm run dev
```

it builds your Javascript files into executable scripts.

#### All the basic installation is now done.

In order to register, you need to use the following Artisan command:

```sh
  npm artisan register:user
```

After you run this command, you will be asked to enter an email and then a password. Email needs to be unique upon registration.

#### And that is all! If the registration was success, you can now login and use the application!

#

### Resources

-   [Detailed description about the project](https://redberry.gitbook.io/assignment-i-task-manager/)
-   [Figma design of the project](https://www.figma.com/file/HkL8NHL7914PBgdYb6D3zN/Laravel-Dev?type=design&node-id=1-2&mode=design&t=S2CaGfNZN4CCA4Yt-0)
-   [DrawSQL - Schema of the excisting tables ](https://drawsql.app/teams/team-soso/diagrams/task-management)

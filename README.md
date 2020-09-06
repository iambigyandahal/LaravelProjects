# LaravelProjects
Repository for my Laravel Projects. Please check [FAQ](#faq) section

## How to install these projects on your device locally?

First you need to have composer and laravel installed. Then you can follow the steps below to install the projects in your device locally.

First clone the repository or checkout only a specific project. See [FAQ](#faq) to checkout specific directory.

1) git clone https://github.com/iambigyandahal/LaravelProjects.git

If you cloned whole repository `cd` inside the repository. And then,

3) cd `project-name`

4) composer install

5) npm install && npm run dev

6) cp .env.example .env

Create a database for your project and open your text editor and change database details in .env file

8) php artisan key:generate

9) php artisan migrate

10) php artisan db:seed

Finally the project is setup to run so type the command below to run the server.

11) php artisan serve

Now goto http://localhost:8000 and interact with the project. You can do anything with it.

## FAQ
1) Checkout specific directory,
	a) Create a new project directory. `mkdir <directory-name>`
	b) `cd <directory-name`
	c) `git init`
	d) `git sparse-checkout init`
	e) `git sparse-checkout set "ProjectName"`. Replace `ProjectName` with project of your interest.
	f) `git sparse-checkout list`. To check which directories will be checked out.
	g) `git pull origin master`

Thus you can checkout specific directories of your interest.

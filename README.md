# CakePHP-Blog-Tutorial
A simple blog written using CakePHP following the [tutorial](https://book.cakephp.org/2.0/en/tutorials-and-examples/blog/blog.html).

Extended to include authentication, extra details for posts and users and basic Bootstrap styling.

### Technologies
This app uses CakePHP for the backend, with MySQL for the database. The app is setup to use a docker container for both the application and database to make it more portable.

### Dependencies
- Docker
- Docker Compose

### Running
To run the application for the first time, simply run ```docker-compose up --build``` in the project root. This may take a few minutes if images need to be downloaded.

Once the application is started for the first time, the database schema must be created by running ```docker exec -it cakephp-blog-tutorial_app_1 Console/cake schema create```. This is not done automatically as it **wipes the database contents**, so is potentially dangerous.

Once the docker images are built and database populated, the application is started by just running ```docker-compose up```.

When started, the application is accessible at [localhost:8000](http://localhost:8000/).

### Using the Application
The first user registered is designated as an admin user. This means that they are able to perform all actions on the site, and access the user area of the site, which allows user account control. All other users are registered as authors by default, so they are only able to edit and delete their own posts, and are not able to access the user area.
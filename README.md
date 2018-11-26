<p align="center"><img src="https://www.yieldr.com/assets/images/Yieldr_smallsizes_green.svg" alt="Yieldr logo"></p>

# Introduction

For this tutorial we will be using the [Api Platform](https://api-platform.com/) framework which is built on top of
[Symfony](https://symfony.com/) and [Composer](https://getcomposer.org/) as our dependency manager.

# High level requirements

Let’s take an imaginary airline that would like to build an API to keep track of their users, the flights they have 
taken and any potential ancillaries they have purchased.

Assume the following:

1. A user could take multiple flights during his/her lifetime
2. A user may purchase none, one or multiple ancillaries during a flight

# Challenge description

Today's challenge is split in 5 stages:

1. Install API-Platform
2. Create Entities
3. Validation & Filters
4. Controllers
5. Tests

The goal is to work on your own project and apply theoretical knowledge you gained during the presentation.
In the main project directory you will see different numbered folders corresponding to each stage of the assignment.
They contain the correct state of the project you should come up after each of the challenge stage.
Remember that the goal is to practice and learn, so please check the answers only when needed.


## Let's Begin!

Go to the url provided and login to cloud9.

Open IDE in the shared environment and clone the following repository:

```bash
git clone https://github.com/yieldr/restart-network-masterclass.git
```

Go to the main project folder:

```bash
cd restart-network-masterclass
```

## 1 - Create a fresh installation of api-platform

The following command will create a new project in folder named "0-workspace":

```bash
composer create-project api-platform/api-platform 0-workspace "2.1.*"
```

You will be prompted to enter a few configuration preferences which also provide default values. 
Set `database_host` to `localhost` and the rest just press enter for all of them and the defaults will be used.

In case you want to change some of these values afterwards just go to the `app/config/parameters.yml` file and 
update them with your preferred values :)

Let's change our directory to the newly created one:
```bash
 cd 0-workspace
 ``` 

To *create a database* you will need to run:

```bash
php bin/console doctrine:database:create
```

Now we only need to run the server:
```bash
php bin/console server:start 0.0.0.0:8080
```

Our project skeleton is set up! To test it, press *"Preview" -> "Preview Running Application"*.

If you see an error: "You are not allowed to access this file. Check app_dev.php for more information.", you will have to
*delete or comment out* the following lines in web/app_dev.php:

```
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ($proxyIp !== @$_SERVER['REMOTE_ADDR'] || !in_array($_SERVER['HTTP_X_FORWARDED_FOR'], $whiteListedAddresses)))
    || !(in_array(@$_SERVER['REMOTE_ADDR'], $whiteListedAddresses) || php_sapi_name() === 'cli-server')
 ) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
```

We also need to comment out the following:
```yaml
    http_cache:
        invalidation:
            enabled: true
            varnish_urls: '%varnish_urls%'
        max_age: 0
        shared_max_age: 3600
        vary: ['Content-Type', 'Authorization']
        public: true
```

**Congratulations! You successfully created a fresh installation of the api-platform locally and you are ready to go!** 🎉 🎊

## 2 - Create some entities

As described in the presentation of ORM, each database table is represented by an entity class which can be found under
the `src/AppBundle/Entity` directory.

Your task is to create entities representing a user, flight and ancillary. You will be guided on how to create a User
entity as an example during the class.

Take a look at the class `app/src/Entity/Foo.php` and use it as a guideline

The following command will generate mysql database tables based on the entities you created:

`php bin/console doctrine:schema:create`

If you have already run the previous command and you want to update your database with the new entities you created you 
can run the following command:

`php bin/console doctrine:schema:update --force`

## 3 - Add validation and filters

After completing stage 2, it is time to add validation to our Entities. Validation is very important since we only allow
incoming data to have a specific format. To do so, you need to read carefully the high level requirements for each entity
and decide what are the appropriate validation rules. 

### 3.1 - Validation

Validation will be done through annotations so, for example, you can just put `@Assert\NotBlank` as a comment
on top of a property and it will automatically apply that validation when doing a `POST` or a `PUT`.

Don't forget to import the `@Assert` by putting this on top of the file: `use Symfony\Component\Validator\Constraints as Assert;`

Here you can learn more about validation and all the different possibilities that it allows us to have:
http://symfony.com/doc/current/validation.html

### 3.2 - Filters

Now let's add some filters. Filters are useful because they help us to easily change the response based on certain 
parameters. For example, what if we have to order the users from the ones that have more points to the ones that have 
the least? Or order them by the last time they have been active?

Using filters makes this a very easy task. We need to add `@ApiResource(attributes={"filters"={"user.order_filter"}})` 
as a comment on top of the class.

In addition we need to define the filter in the `config/api_filters.yml`

```yaml
  user.order_filter:
    parent: 'api_platform.doctrine.orm.order_filter'
    arguments: [ { id: ~, name: ~,  points: ~, last_seen: ~} ]
    tags: [ 'api_platform.filter' ]
```

If we now do a request to `users` with `order[points]=desc`, we should be able to obtain the users ordered by their amount of points 
from bigger to smaller.

You can read more about ordered filters here: https://api-platform.com/docs/core/filters/#order-filter

Of course, there are more types of filters, which can be found in this URL: https://api-platform.com/docs/core/filters

## 4 - Create the controllers

Let's say that the airline company wants to send a promotion to certain users and asks us to be able to do the following:

> For each flight we want to get the email, name and points of the users who purchased it and were active since yesterday.

We can't use any of the features that API Platform provides us, but instead we need to make them on our own.

The first step to do this is create a new endpoint `/flights/{id}/topusers` that will retrieve this information.
In order to do this, we first need to create the endpoint in the `routing.yml`, located in the config folder, and specify
 the following:

``` yaml
user_flight_topusers:
    path: '/flights/{id}/topusers'
    methods:  ['GET']
    defaults:
        _controller: 'AppBundle:Flight:topUsers'
        _api_resource_class: 'AppBundle\Entity\Flight'
        _api_item_operation_name: 'topUsers'
```

Now we can create a controller called `FlightController` in the `src/AppBundle/Controller` directory with a function 
called `topUsersAction` that will receive a flight.

The full example is explained at the end of the page, in the paragraph starting with "Alternatively, you can also use...":

https://api-platform.com/docs/core/operations/#creating-custom-operations-and-controllers

Inside there we can create our own code to achieve what the airline asked us.

## 5 - Add unit tests

Unit tests are important for every application because if they are created and maintained carefully they can point out 
potential bugs after adding new features.

For example, let's say we have a validation rule which states that any new flight added to the database must not have 
the same origin and destination. We also have a unit test for this in place, where we test the following two cases.

### Case 1

The request's origin and destination fields are exactly the same therefore the validation should fail.

### Case 2

The request's origin and destination fields are different so the validation should pass.

If for any reason the validation is removed from the Entity because of a developer's mistake, case 1 will fail and point
out that there is something wrong with the validation.

Your task is to write unit tests which verify that all the business requirements are met at all times.

Again, you can see how a unit test looks like by looking at the `FlightsTest`.

We have a command to generate test data (fixtures), you can execute it by running: `php bin/console doctrine:fixtures:load`

You can execute the tests by running: `php vendor/bin/phpunit`


## Notes:

If there is the need to switch to a different checkpoint don't forget to:

Stop the current server before switching
```bash
php bin/console server:stop
```

After switching to the new checkpoint:

```bash
composer update
```

Update the current database schema:

```bash
php bin/console doctrine:schema:update
```

<p align="center"><img src="https://www.yieldr.com/assets/images/Yieldr_smallsizes_green.svg" alt="Yieldr logo"></p>

# Introduction

For this tutorial we will be using the [Api Platform](https://api-platform.com/) framework which is built on top of
[Symfony](https://symfony.com/) and [Composer](https://getcomposer.org/) as our dependency manager.

# Challenge description

Today's challenge is split in 5 stages:

1. Install API-Platform
2. Create Entities
3. Validation & Filters
4. Controllers
5. Tests

## Let's Begin!

Clone the repository of this workshop by running the following command in your terminal:

```bash
git clone https://github.com/yieldr/restart-network-masterclass.git
```

Next change into the projects directory

```bash
cd restart-network-masterclass
```

Now it's time to set up our environment. From inside the `restart-network-masterclass` directory run:

```bash
vagrant up
```

This command will create an Ubuntu Linux virtual machine and install necessary software such as PHP7 and MySQL. The contents of this directory will be synchronized inside this virtual machine under the `/vagrant` directory.

Once the installation is complete run the following command to access the virtual machine:

```bash
vagrant ssh
```

From this moment onwards, this is the environment we will be working in.

Now lets change directory to where vagrant has synchronized our project files and inspect the files within that folder:

```bash
cd /vagrant
ls
```

## 1 - Create a fresh installation of api-platform

```bash
composer create-project api-platform/api-platform 0-workspace "2.1.*"
cd 0-workspace
```

You will be prompted to enter a few configuration preferences which also provide default values. Set `database_host` to `localhost` and the rest just press enter for all of them and the defaults will be used.

In case you want to change some of these values afterwards just go to the `app/config/parameters.yml` file and update them with your preferred values :)

To create a database you will need to run: `php bin/console doctrine:database:create`

Our project skeleton is set up! To test it, lets start a web server.

```bash
php bin/console server:start 0.0.0.0:8000
```

Next, visit [192.168.33.10:8000](http://192.168.33.10:8000/) in your browser.

**Congratulations! You successfully created a fresh installation of the api-platform locally and you are ready to go!** 🎉 🎊

## 2 - Create some entities

As described in the presentation of ORM, each database table is represented by an entity class which can be found under
the `src/AppBundle/Entity` directory.

There are 3 Entities which represent users, flights and ancillaries.

The Users Entity is complete and contains all the required mappings and validation requirements.

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

Now let's add some filters. Filters are useful because they help us to easily change the response based on certain parameters.
For example, what if we have to order the users from the ones that have more points to the ones that have the least? Or order them by the last time they have been active?

Using filters makes this a very easy task. We just need to add `@ApiResource(attributes={"filters"={"user.order_filter"}})` as a comment on top of the class and that's it!

If we now go to: `/users?order[points]=desc`, we should be able to obtain the users ordered by their amount of points from bigger to smaller.

You can read more about ordered filters here: https://api-platform.com/docs/core/filters/#order-filter

Of course, there are more types of filters, which can be found in this URL: https://api-platform.com/docs/core/filters

## 4 - Create the controllers

Let's say that the airline company wants to send a promotion to certain users and asks us to be able to do the following:

> For each flight we want to get the email, name and points of the users who purchased it and were active since yesterday.

We can't use any of the features that API Platform provides us, but instead we need to make them on our own.

The first step to do this is create a new endpoint `/flights/{id}/topusers` that will retrieve this information.
In order to do this, we first need to create the endpoint in the `routing.yml`, located in the config folder, and specify the following:

``` yaml
user_flight_topusers:
    path: '/flights/{id}/topusers'
    methods:  ['GET']
    defaults:
        _controller: 'AppBundle:Flight:topUsers'
        _api_resource_class: 'AppBundle\Entity\Flight'
        _api_item_operation_name: 'topUsers'
```

Now we can create a controller called `FlightController` in the `src/AppBundle/Controller` directory with a function called `topUsersAction` that will receive a flight.

The full example is explained at the end of the page, in the paragraph starting with "Alternatively, you can also use...":

https://api-platform.com/docs/core/operations/#creating-custom-operations-and-controllers

Inside there we can create our own code to achieve what the airline asked us.

## 5 - Add unit tests

Unit tests are important for every application because if they are created and maintained carefully they can point out potential bugs after adding new features.

For example, let's say we have a validation rule which states that any new flight added to the database must not have the same origin and destination. We also have a unit test for this in place, where we test the following two cases.

### Case 1

The request's origin and destination fields are exactly the same therefore the validation should fail.

### Case 2

The request's origin and destination fields are different so the validation should pass.

If for any reason the validation is removed from the Entity because of a developer's mistake, case 1 will fail and point out that there is something wrong with the validation.

Your task is to write unit tests which verify that all the business requirements are met at all times.

Again, you can see how a unit test looks like by looking at the `TestFlights`.

You can execute the tests by running:
```bash
php vendor/bin/phpunit
```
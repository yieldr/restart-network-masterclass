<p align="center"><img src="https://www.yieldr.com/assets/images/Yieldr_smallsizes_green.svg" alt="Yieldr logo"></p>

# Introduction

For this tutorial we will be using the [Api Platform](https://api-platform.com/) framework which is built on top of
[Symfony](https://symfony.com/) and [Composer](https://getcomposer.org/) as our dependency manager.

# Challenge description

Today's challenge is split in 5 stages:

- 1 - Getting Started
- 2 - Create Entities
- 3 - Validation & Filters
- 4 - Controllers
- 5 - Tests

## 0 - Setup

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

This command will create an Ubuntu Linux virtual machine and install necessary software such as PHP7 and MySQL. The 
contents of this directory will be synchronized inside this virtual machine under the `/vagrant` directory.

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

## 1 - Getting Started

- Step 1: Create a fresh installation of api-platform

```bash
composer create-project api-platform/api-platform 0-workspace "2.1.*"
cd 0-workspace
```

You will be prompted to enter a few configuration preferences which also provide default values. Just press enter for all
of them and the defaults will be picked up.

In case you want to change some of these values afterwards just go to the `app/config/parameters.yml` file and update
them with your preferred values :)

**Congratulations! You successfully created a fresh installation of the api-platform locally and you are ready to go!** 🎉 🎊

## 2 - Create the entities

As described in the presentation of ORM, each database table is represented by an entity class which can be found under 
the `src/AppBundle/Entity` directory.

There are 4 Entities which represent the ancillaries, bookings, flights and the users. 

The Users Entity is complete and contains all the required mappings and validation requirements.

## 3 - Add validation

After completing task 1, it is time to add validation to our Entities. Validation is very important since we only allow
incoming data to have a specific format. To do so, you need to read carefully the high level requirements for each entity
and decide what are the appropriate validation rules.

## 4 - Create the controllers

## 5 - Add unit tests

Unit tests are important for every application because if they are created and maintained carefully they can point out
potential bugs after adding new features.

For example, let's say we have a validation rule which states that any new flight added to the database must not have the
same origin and destination. We also have a unit test for this in place, where we test two cases:

- Case 1: The request's origin and destination fields are exactly the same therefore the validation should fail.
- Case 2: The request's origin and destination fields are different so the validation should pass.

If for any reason the validation is removed from the Entity because of a developer's mistake, case 1 will fail and 
point out that there is something wrong with the validation.

Your task is to write unit tests which verify that all the business requirements are met at all times.

Again you can see how a unit test looks like by looking at the UsersTest.
<p align="center"><img src="https://www.yieldr.com/assets/images/Yieldr_smallsizes_green.svg" alt="Yieldr logo"></p>

# Introduction

For this tutorial we will be using the [Api Platform](https://api-platform.com/) framework which is built on top of
[Symfony](https://symfony.com/).

# Installation

For this tutorial we will be using [Composer](https://getcomposer.org/)

- Step 1: Create a fresh installation of api-platform

```bash
$: composer create-project api-platform/api-platform restart
```

You will be prompted to enter a few configuration preferences:

```
database_host : localhost
database_port: 3306
database_name: api-platform
database_user: api-platform
database_password: 1234
(The rest you can skip them and the defaults will be used)
```
In case you entered any of the above wrong, don't worry! Just go to the `app/config/parameters.yml` file and update
them with your preferred values :)

- Step 2: Place the `Vagrantfile` that was provided you you under the root (`restart`) directory and run
```bash
$: vagrant up
```

**Congratulations! You successfully created a fresh installation of the api-platform locally and you are ready to go!** 🎉 🎊
# Challenge

As described in the presentation of ORM, each database table is represented by an entity class which can be found under 
the `src/AppBundle/Entity` directory.

There are 4 Entities which represent the ancillaries, bookings, flights and the users. 

The Users Entity is complete and contains all the required mappings and validation requirements.

### Task 1 : Creating the mappings

Your first task is to update the other three Entities by creating the appropriate fields and map them to the database fields.

### Task 2 : Adding validation

After completing task 1, it is time to add validation to our Entities. Validation is very important since we only allow
incoming data to have a specific format. To do so, you need to read carefully the high level requirements for each entity
and decide what are the appropriate validation rules.

### Task 3 : Creating the controllers (?)

### Task 4 : Adding unit tests

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



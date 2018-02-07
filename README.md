<p align="center"><img src="https://www.yieldr.com/assets/images/Yieldr_smallsizes_green.svg" alt="Yieldr logo"></p>

# Introduction

For this tutorial we will be using the [Api Platform](https://api-platform.com/) framework which is built on top of
[Symfony](https://symfony.com/).

# Installation

To begin with this tutorial, you will need to clone the project we have prepared for you from 
[github](https://github.com/yieldr/restart-network-masterclass). You can do this in your command line by typing: 

```bash
$: git clone https://github.com/yieldr/restart-network-masterclass.git 
```

Assuming you have composer installed in your computer, we will use it to install the project's dependencies.
To do so, navigate to the directory where the project was cloned (e.g `cd Documents/restart-network-masterclass`) and
run the following command in the terminal:

```bash
$: composer install
```

If the command above completed successfully you project's dependencies are succesfully imported under the `vendor` directory.  

Next you will need to update the configuration file of the project, which can be found in the `app/config` directory.
 
Here you can set up doctrine to connect with your mysql database. If you open the `config.yml` file you will see
that the structure already exists, you just need to provide the correct values for your environment.

# Challenge

As described in the presentation of ORM, each database table is represented by an entity class which can be found under 
the `src/AppBundle/Entity` directory.

There are 4 Entities which represent the ancillaries, bookings, flights and the users. 

The Users Entity is complete and contains all the required mappings and validation requirements.

### Task 1

Your first task is to update the other three Entities in such way that they meet the high level requirements provided 
to you.

## Task 2


## Symfony Tutorial

### First Section

\---
### Second Section

\---
### Add Validation

It is important to validate all the requests that come from the client to keep the data in our database
consistent. Validation should not be confused with Authentication or Authorization as these are prior steps to validation.
For example when a client sends a `POST` request to `/books` to create a new book, the incoming payload needs
to be validated to see if it meets the api requirements. Possible validation for the `Book` entity is:

- The field `title` is required and should not be more than 255 characters (type=VARCHAR(255))
- The field `description` is also required but does not have a length limit (type=TEXT) 
- The field `author` is required and has the same validation rule as the field `title`
- The field `publication` is required and it expects a date in this format: `YYYY-MM-DD HH:MM:SS`
- There are only two optional values `id` and `isbn` which can be omitted from the request and therefore the
default database values will be used.

#### --------------------- TASK ---------------------

Modify the `Review.php` file and add the following validation for the Review entity:  
**(hint) You can look at the `Book` Entity to see how the annotations are used for validation**

- The field `rating` is required and its type should be `smallint`
- The field `body` is required and its type should be `text`
- The field `author` is required and its type should be `varchar(255)`
- The field `publicationDate` is required and its type should be `datetime`
- The field `Book` is required, its type should be `integer` and it should exist in the database already.


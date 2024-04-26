------------ JOBSHEET 3 ------------

1. In Practicum 1 - Step 5, what is the function of the APP_KEY in the  Laravel .env setting 
file?
- In Practicum 1 - Step 5, the function of the APP_KEY in the Laravel .env setting file is to provide a unique encryption key used for various security-related tasks such as hashing passwords and encrypting data. This key is crucial for securing sensitive information stored in the application, such as user passwords. It ensures that data remains secure even if the database is compromised, as the stored information will be encrypted using this key.

2. In Practicum 1, how do we generate value for APP_KEY?
- In Practicum 1, the value for APP_KEY is typically generated using the php artisan key:generate command in the Laravel command line interface. This command automatically generates a random key and sets it as the value for APP_KEY in the .env file.

3. In Practicum 2.1 - Step 1, by default how many migration files does Laravel have? and 
what are the migration files for?
- In Practicum 2.1 - Step 1, by default, Laravel comes with two migration files: create_users_table.php and create_password_resets_table.php. These migration files are used to define the structure of the corresponding database tables (users and password_resets).

4.  By default, the migration file contains the code $table->timestamps();, what is the 
purpose/output of the function?
- The purpose of the $table->timestamps() function in a migration file is to automatically add created_at and updated_at columns to the database table. These columns are used to track the creation and last update timestamps of each record.

5. In the Migration File, there is a function $table->id(); What type of data does the 
function return?
- The $table->id() function in a migration file returns an auto-incrementing unsigned integer, typically used as the primary key for the table.

6. What is the difference between the migration results in the m_level table, between using 
$table->id(); by using $table->id('level_id'); ?
- The difference between using $table->id() and $table->id('level_id') in the migration results in the m_level table is that the latter explicitly sets the name of the primary key column to level_id, while the former uses the default column name id.

7. In migrations,  what is the ->unique() function  used for?
- In migrations, the ->unique() function is used to specify that a column should have unique values across all rows in the table, ensuring data integrity by disallowing duplicate entries.

8. In Practicum 2.2 - Step 2, why does the level_id column  in the m_user table  use 
$tabel->unsignedBigInteger('level_id'), while the level_id column  in the m_level 
table  uses $tabel->id('level_id') ?
- In Practicum 2.2 - Step 2, the level_id column in the m_user table uses $table->unsignedBigInteger('level_id') because it likely serves as a foreign key referencing the id column in the m_level table. On the other hand, the level_id column in the m_level table uses $table->id('level_id') to explicitly set the primary key column name to level_id.

9. In Practicum 3 - Step 6, what is the purpose of the Hash Class? and what does the Hash 
program code mean::make('1234');?
- In Practicum 3 - Step 6, the purpose of the Hash Class is to securely hash passwords before storing them in the database. The Hash::make('1234') code hashes the string '1234', typically representing a password, using a secure cryptographic algorithm.

10. In Practicum 4 - Step 3/5/7, in the query builder there is a question mark (?), what is 
the use of the question mark (?) of these?
- In Practicum 4 - Step 3/5/7, the question mark ? in the query builder is a placeholder for binding parameters. It allows for safe parameter binding to prevent SQL injection attacks and also improves query execution efficiency by enabling prepared statements.

11. In Practicum 6 - Step 3, what is the purpose of writing protected code $table = 
'm_user'; and protected $primaryKey = 'user_id'; ?
- In Practicum 6 - Step 3, writing protected $table = 'm_user'; and protected $primaryKey = 'user_id'; specifies the table name and primary key column name explicitly for the m_user model. This ensures that Laravel uses the correct table and primary key when interacting with the m_user model.

12. In your opinion, where is it easier to use in performing CRUD operations to the database 
(DB Façade / Query Builder / Eloquent ORM) ?
- In performing CRUD operations on the database, the choice between DB Facade, Query Builder, and Eloquent ORM depends on the complexity of the application and personal preference. However, Eloquent ORM is often considered the easiest to use as it provides a higher level of abstraction, simplifying database interactions with object-oriented models.
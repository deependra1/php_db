# php_db

In order to store or access the data inside a MySQL database, you first need to connect to the MySQL database server. PHP offers two different ways to connect to MySQL server: MySQLi (Improved MySQL) and PDO (PHP Data Objects) extensions.

While the PDO extension is more portable and supports more than twelve different databases, MySQLi extension as the name suggests supports MySQL database only. MySQLi extension however provides an easier way to connect to, and execute queries on, a MySQL database server. Both PDO and MySQLi offer an object-oriented API, but MySQLi also offers a procedural API which is relatively easy for beginners to understand.

# mysqli_connect()

In PHP to connect to MySQL database server we use mysqli_connect() function.

### syntax:

$connection_name = mysqli_connect("hostname", "username", "password", "database");

# mysqli_close()

To close the MySQL database server connection we use mysqli_close() function

### syntax:

mysqli_close($connection_name);

# mysqli_query()

The query() / mysqli_query() function performs a query against a database.

### syntax

mysqli_query(connection, query, resultmode_optional)

### example

$result = mysqli_query($con, "SELECT \* FROM Persons")

# mysqli_error()

The error / mysqli_error() function returns the last error description for the most recent function call, if any.

### syntax

mysqli_error(connection)

# Prepared Statement

A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. These placeholders will be replaced by the actual values at the time of execution of the statement.

MySQLi supports the use of anonymous positional placeholder (?), as shown below:

INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?);

The prepared statement execution consists of two stages: prepare and execute.

Prepare — At the prepare stage a SQL statement template is created and sent to the database server. The server parses the statement template, performs a syntax check and query optimization, and stores it for later use.
Execute — During execute the parameter values are sent to the server. The server creates a statement from the statement template and these values to execute it.
Prepared statements is very useful, particularly in situations when you execute a particular statement multiple times with different values, for example, a series of INSERT statements. The following section describes some of the major benefits of using it.

# mysqli_prepare()

The prepare() / mysqli_prepare() function is used to prepare an SQL statement for execution.

### syntax

mysqli_prepare(connection, query)

# mysqli_stmt_bind_param()

The mysqli_stmt_bind_param() function (line no-16) bind variables to the placeholders (?) in the SQL statement template. The placeholders (?) will be replaced by the actual values held in the variables at the time of execution. The type definition string provided as second argument i.e. the "sss" string specifies that the data type of each bind variable is string.

The type definition string specify the data types of the corresponding bind variables and contains one or more of the following four characters:

- b — binary (such as image, PDF file, etc.)
- d — double (floating point number)
- i — integer (whole number)
- s — string (text)

The number of bind variables and the number of characters in type definition string must match the number of placeholders in the SQL statement template.

# mysqli_stmt_execute()

The mysqli_stmt_execute() function accepts a prepared statement object (created using the prepare() function) as a parameter, and executes it.

### syntax

mysqli_stmt_execute($stmt)

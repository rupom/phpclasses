This is a simple class that can parse text files with a list of MySQL query statements to be executed.

The class splits the file lines, skips comment lines and gathers all consecutive lines until the one ends with semi-colon to get the complete SQL statement.

Each statement is executed as MySQL query to the current default MySQL database connection.

VERSION HISTORY
------------------
- 0.0.5
  - Started with the template. 
    - Users ('gebruikers') page ready. Not started with the forums and ranking ('ranglijst') pages yet.
  - Renamed db.php to config.php. Now serves as a general configuration file.
  - database.sql contains new records of user, susbite, role and activity to test the charts on users with multiple subsites.

- 0.0.4
  - Moved JavaScript to its own directory (/js).
  - Removed indents to improve readability of the code. Also removed the PHP close tags.

- 0.0.3
  - Timeline works! All three charts (table / pie chart / timeline) are fully working.

- 0.0.2
  - Using PDO (instead of mysql) as API to connect to the database.
  - Code cleanup (unnecessary spaces and carriage returns removed).

- 0.0.1
  - Table and pie chart are displayed correctly.
  - Timeline does not work.
  - Only list of 'gebruikers' (users), no list of forums yet.
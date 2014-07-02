FOK-crewgeschiedenis
====================

History of the FOK!.nl crew. A nice overview per user and forum. All dynamic, using PHP, MySQL and Google Charts.
A manual version made prior to this project is available on http://fok.zevkiselim.nl/crew/.

- Using code from a nice tutorial on http://sophiedogg.com/creating-a-google-pie-chart-using-sql-data/.
- "database.sql": the MySQL database dump.


Steps
-------
1. Create a new database.
2. Import database.sql into the new database.
3. Edit config.php.


Version history
------------------
- 0.0.5
  - Started with the template. 
    - Users ('gebruikers') page ready. Not started with the forums and ranking ('ranglijst') pages yet.
  - Renamed db.php to config.php. Now serves as a general configuration file.
  - database.sql contains new records of user, susbite, role and activity to test the charts on users with multiple subsites.

See VERSION.md for the complete version history.
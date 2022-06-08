# Elibrary-php

To login as an admin use these credentials
username: tibex
pwd: qwerty1234

!!! Stay online due to icons,ajax libraries and other java script libraries used for this project.  
!!! Check your spam for email verification and password change.
!!! Files to be imported are in admin in a folder named "csv".
!!! On first load, press the home on top navigation bar so that index.php needs to be displayed on the top bar in order for the landing page to properly refer to the correct files needed.

!!! The import books featured was built as a backup feature in mind therefore its best to remove db contents for the books before importing or else a dublicate data error will occur,
Suggested order of testing for the import and export of files
  #export books from the books database(or use the one provided in the csv folder)
  #truncate the book table with set foreign key check to off
  #import from dashboard the exported csv file(or the backup)

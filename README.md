# SeniorProject

To run this project, you will XAMPP for the server and database.  You can download XAMPP from here https://www.apachefriends.org/download.html.  For the windows installation, you may need to alter your UAC and some of your ports.  As my ports were taken by my virtual machine, I changed them to 1234 and 8181.  To do this, run the XAMPP application and go to the config for the apache server.  On this, go to Apache(http.conf) and search for 80.  For each entry of 80 switch it to 1234(or a free port you know of).  Then, go to Apache(http-ssl.conf) and seach for 443.  Switch all of these to 8181 or again, to a port of your chosing.

Then you will need to put all of the php files from this git into the htdocs of XAMPP.  This is located in c:\XAMPP\htdocs.  You can create a new folder to store them in here if you so chose.  You will just have to adjust the address of the file in your web browser if you do so.  Just make sure to have all php files and the css file in the same folder for the application to run properly.

You then should be able to run the applicaion by going to http:://localhost:1234/index.php.  If you put the files into an extra folder you just have to add it like so: http://localhost:1234/foldername/index.php.

Once you have the application running, you can enter and delete tasks by task name, and can sort tasks by their status.  You can also enter the due date for each task, which will then also output whether its due (on that day), past due(due date is from a day before the current date), or is pending (due date is in the future).  You can also delete all of the tasks from the database with the delete all button.

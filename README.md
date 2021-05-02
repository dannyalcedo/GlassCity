# GlassCity
While Hide and Seek is an iconic and very fun game for kids, as an adult it’s not as easy to sneak around trees or crouch behind boulders. However, if you scale the game up to a sprawling city like New York you’ll have plenty of area to cover and clever spaces to hide. But then you run into another problem: trying to find a hider within a city is almost near impossible and hiding for such a long time can get pretty boring. If we create an experience focused on the seeking aspect of Hide and Seek, allow users to choose their preferred playing area, and provide clues to triangulate a hider, then the game will become a bit more balanced and help rekindle the fascination that we had with the game as kids. Furthermore, this can also serve as a great way for tourists and new residents to get better acquainted with the city, and for long-time residents to prove how much of a New Yorker they really are.  

# Launching GlassCity
1. GitHub
    1. Clone the GlassCity repo into your local drive
2. Unity
    1. Download the latest version of Unity
        * A free plan is available for individual use.
        * Please ensure the Unity Hub is also downloaded. 
    2. Once both applications are downloaded (do not open them yet) make your way to the GlassCity Repo and unzip one of the following two files.
        * Unzip GlassCity.zip inside the /Unity-Windows directory if you are on a Windows 
        * Unzip GlassCity.zip inside the /Unity-Mac directory if you are on a Mac 
    4. Then, open your recently downloaded Unity Hub and 'Add' the resulting unzipped GlassCity project to Unity Hub.
    5. If all is done correctly, you will now be able to open the project from Unity Hub
3. Launch Database
    1. Download the latest version of XAMPP: an open-source cross-platform web server solution stack package
        * If on a Mac, make sure you do NOT download the XAMPP files that are greater than 164Mb
    2. Once XAMPP is downloaded, launch the application, and start the MySQL Database Server, the ProFTPD Server, and Apache Web Server within the XAMPP application.
    3. Once the servers are running, select “Open Application Folder” to be taken to the server directory. 
    4. Within the parent directory of the server directory, /xamppfiles, click into the /xamppfiles/htdocs directory and copy the /GlassCity directory found in this repository's /xampp directory.
        * The GlassCity folder houses the php files to interface the MySQL database with Unity.
4. Updating the Database
    1. Once your XAMPP servers are running and the php files are within the htdocs directory, open your favorite web browser and go to http://localhost/dashboard/
    2. From the dashboard, select the phpMyAdmin tab on the top right. This is where the database will live. 
    3. Once inside the phpMyAdmin page, select the “Import” tab on the top of the page
    4. In the Import tab, select “Choose File” and select the glasscity.sql file from the cloned repository
    5. If this is successful, you should see a “glasscity” database on the left menu and two tables associated with that database.
5. Playing the game
    1. You are now ready to play the game. 
    2. If you haven't done so already, launch GlassCity from the Unity Hub
    3. Navigate to the Scenes directory in the Unity Inspector and double click the “LogIn” scene. Then, click play on the top of the screen. 

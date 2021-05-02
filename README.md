# GlassCity
While Hide and Seek is an iconic and very fun game for kids, as an adult it’s not as easy to sneak around trees or crouch behind boulders. However, if you scale the game up to a sprawling city like New York you’ll have plenty of area to cover and clever spaces to hide. But then you run into another problem: trying to find a hider within a city is almost near impossible and hiding for such a long time can get pretty boring. If we create an experience focused on the seeking aspect of Hide and Seek, allow users to choose their preferred playing area, and provide clues to triangulate a hider, then the game will become a bit more balanced and help rekindle the fascination that we had with the game as kids. Furthermore, this can also serve as a great way for tourists and new residents to get better acquainted with the city, and for long-time residents to prove how much of a New Yorker they really are.  

# Launching GlassCity
1. GitHub
    1. Clone the GlassCity repo into your local drive
2. Unity
    1. Download the latest version of Unity
        * A free plan is available for individual use.
        * Please ensure the Unity Hub is also downloaded. 
    2. Once Unity Hub and Unity are downloaded, open Unity Hub and add the GlassCity Unity project directory from the github repo to Unity Hub.
    3. If all is done correctly, you will now be able to open the project from Unity Hub
3. Launch Database
    1. Download the latest version of XAMPP: an open-source cross-platform web server solution stack package
        * If on a Mac, make sure you do NOT download the XAMPP files that are greater than 164Mb
    2. Once XAMPP is downloaded, launch the application, and start the MySQL Database Server, the ProFTPD Server, and Apache Web Server within the XAMPP application.
    3. Once the servers are running, select “Open Application Folder” to be taken to the server directory. 
    4. Within the parent directory, /xamppfiles, click into the /xamppfiles/htdocs directory and copy the “GlassCity” folder from the git repository into it.
        * The GlassCity folder houses the php files to interface the MySQL database with Unity.
4. Updating the Database
    1. Once your XAMPP servers are running and the php files are within the htdocs directory, open your favorite web browser and go to http://localhost/dashboard/
    2. From the dashboard, select the phpMyAdmin tab on the top right. This is where the database will live. 
    3. Once inside the phpMyAdmin page, select the “Import” tab on the top of the page
    4. In the Import tab, select “Choose File” and select the glasscity.sql file from the GitHub
    5. If this is successful, you should see a “glasscity” database on the left menu.
5. Playing the game
    1. You are now ready to play the game. 
    2. Navigate to the Scenes directory in the Unity Inspector and double click the “LogIn” scene. Then, click play on the top of the screen. 

# ACF Meetup sample

##What is it?

This is a Wordpress site source files, containing a SQL backup, the presentation used
for the meet-up and all uploaded data to make the example work.

##Requirements

Here is a detail list of the technical requirements to run this project in a local environment.
###Local Development
- PHP
- Code Editor
- Server environment like: MAMP, XAMP, LAMB.
- PHP My admin
- Basic knowledge in all previously mention tools or technologies. =)

##Installation

Here are the steps to run the local server for development.

1. Open the terminal

2. You need to clone the repository within your httdocs or any other folder
the server is using as root:
```
"git clone https://github.com/egamboa/acf-sample.git"
```
3. Then import the Database acf-sample:

4. When you are done with the database import, you should make sure the file,
```
wp-config.php
```
Has the right access information for MySql server and database.

5. Go to you local URL: 'http://localhost/acf-sample/'

6. Login with Username: admin / Password: asdmin123

7. If you navigation is not working, or you are getting a problem
make sure you check this 2 links:

- Make sure you update your permalinks: https://codex.wordpress.org/Using_Permalinks
- Correct the Site URL and Home values in the Config SQL Table. https://codex.wordpress.org/Changing_The_Site_URL
- Else contact some you trust, or send me an email: andres@wearestateside.com

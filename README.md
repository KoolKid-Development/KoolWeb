# KoolWeb 
A custom minecraft portal with koollauncher integration for you server!
## License

[MIT](https://choosealicense.com/licenses/mit/)

# Test the website live

https://kool-kid.xyz/live/koolweb

## Authors

- [@ItzKoolKid96](https://github.com/ItzKoolKid96)


## Features

- MySQL support
- KoolLauncher Integration
- Easy to config (No need of programing knowledge)
- Cross platform
- Preloader
- And much more

## Screenshots

![App Screenshot](https://media.discordapp.net/attachments/950049232662982686/1005111362852233266/unknown.png?width=1352&height=676)
![App Screenshot](https://media.discordapp.net/attachments/950049232662982686/1005111484638048337/unknown.png?width=1352&height=676)
![App Screenshot](https://media.discordapp.net/attachments/950049232662982686/1005111618977407017/unknown.png?width=1352&height=676)
## Used By

This project is used by the following servers:

- NoxlCraft
- If you are using it and you want your name here dm me on discord KoolKid#8483


## Requirements

To run this project, you will need to have some things

`Remote MySQL Database`

`WebHost`

`PHP`

`PhPMyAdmin`

## Installation

### Downloading the project!
First you have to download the project from here

```bash
  git clone https://github.com/KoolKid-Development/KoolWeb.git
```
or download it from this link: https://github.com/KoolKid-Development/KoolWeb/archive/refs/heads/main.zip

### Setting Up MySQL
First you have to login phpmyadmin then go to `SQL` TAB
and paste this code

To execute this command press ```CTRL + ENTER``` on your keyboard
```sql
CREATE DATABASE KoolWeb;
```
After that you have to select that database and go to the `SQL` tab and paste this commands! 

To execute this commad press `CTRL + ENTER` on your keybord
```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

```sql
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
```

```sql
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
```

And you are done with the MySQL Part
### Setting up the project
First you have to open config.yml and fill in your servers info here is the default config

```php
<?php
$seo_title = "YourMcName"; //Your website name
$seo_link = "https://yourwebsite.net"; //Your website link
$seo_description = "A beautiful, custom portal for your Minecraft server"; //Your website description
$seo_keywords = "Minecraft, Server, Website, PORTAL!, KoolKid, koollauncher, Romaina"; //Your website tags!
$favicon = "./img/favicon.png"; //Your favicon
$logo = "./img/logo.png"; //Your logo
$preloadertime = "3"; /*   The default 1 is 3 for 3s            */
$store_link = "https://store.yourmc.net";
$vote_link = "https://vote.yourmc.net";
$forum_link = "https://forum.yourmc.net";
$discord_invite = "https://discord.com";
$backround = "./img/main-bg.png"; //Your backround
$backroundloggedin = "../img/main-bg.png"; //Your backround for you logged in users!
$logologgedin = "../img/logo.png"; //Your logo for logged in users! 
$faviconloggedin = "../img/favicon.png"; //Your logo for logged in users
$launchername = "Your launcher name"; //Your launcher name
$launcherdesc = "Your launcher description here!"; //Your launcher description here
$launcherappname = "Launcher.exe"; //Your launcher.exe name!

/*
 Google Analytics (ga)
 By enabling Google Analytics on this site, you can get valuable data on who visits the site.
 See the following link to find out where to find the tracking ID.
 THIS THING DOSE NOT WORK IN THIS VERSION WAIT FOR THE NEW VERSION TO RELASE
*/
$enable_ga = false; // If set to true, please provide tracking code below
$ga_tracking_id = ""; // Please only enter the tracking ID, not the full code snippet

?>
```

Then you have to setup the database connection for the KoolLauncher here is the default config
all what you have to config in here is the database host password and name and the database name
```php
<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 
//IP,username,password,databasename
$db = mysqli_connect('YourMySqlIP', 'YourDatabaseUsername', 'YourDatabasePassword', 'YourDatabaseName');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = $password1;

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../dashboard/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../dashboard/index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
```


## Deployment

To deploy this project you need to upload it to your webhost!



## Support

For support, join our discord https://discord.gg/jrgcrME3Bs


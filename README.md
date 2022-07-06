## :rocket: WHM/cPanel Connection API
* :star_struck: Installation and Configuration Repository.

## :computer: Requirements
Components needed to install dependencies.

* :heavy_check_mark: composer
* :heavy_check_mark: PHP 7.4+

## :atom: Installation

* In the Config folder, rename the *Config-Example.php* file to *Config.php*, open the file and enter your credentials:
``` 
define("CONF_WHM_URL", "your-domain-com.br");
define("CONF_WHM_USER", "username-whm");
define("CONF_WHM_TOKEN", "token-whm");
```

* In the main directory, the composer.json file has all the project settings, just run it with composer.
``` 
composer install
```

* Basic use:
``` 
require "vendor/autoload.php";
use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->searchAccounts();

echo json_encode($account);
``` 

* Available Functionality: WHM - Accounts
```
* searchAccounts (List of all accounts)
* getDetails (Details of a specific account)
* create (Create a new account)
* availableFunctions (List of API functions available for current authenticated user)
* userDomainDetails (Get a hosted domain details)
* changeDiskSpaceQuota (Modify an user's disk space quota)
* forcePasswordChange (Force user to change their password at their next login)
* getDomains (List of domains exists in the server)
* hasDigestAuth (Digest auth is enabled or disabled)
* hasMyCnfInHomeDirectory (.my.cnf file exists in user's home directory or not)
* limitBandwidth (Modify bandwidth limit)
* getUsers (List of all users in server)
* getLockedAccounts (List of all locked accounts)
* getSuspendedAccounts (List of all suspended accounts)
* createUserSession()
* changePlan()
``` 

## :heart_eyes_cat: Desenvolvedor
[![Github Badge](https://img.shields.io/badge/-Github-000?style=flat-square&logo=Github&logoColor=white&link=https://github.com/nilsonpessim)](https://github.com/nilsonpessim)
[![Linkedin Badge](https://img.shields.io/badge/-LinkedIn-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://br.linkedin.com/in/nilsonpessim)](https://br.linkedin.com/in/nilsonpessim)
[![Whatsapp Badge](https://img.shields.io/badge/-Whatsapp-4CA143?style=flat-square&labelColor=4CA143&logo=whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone=5537999351046)](https://api.whatsapp.com/send?phone=5537999351046)

// generate token in https://example.com.br:2087/cpsessXXXXXXXX/scripts7/apitokens/home
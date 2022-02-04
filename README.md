# What is dev.localhost?

Hello!
This project is a message board system termed 'shareboard' complete with login. The posts are called "shares".

dev.localhost was made with the intention of practicing php and MVC frameworks.

To that end, this is a MVC framework that I made for this project.

Technologies Used:

- PHP
- mySQL
- Apache
- Bootstrap
- XAMPP
- Visual Studio Code

[View My other Works!](https://www.helloleelacey.com)

## Documentation

As previously stated, this project is based on the Model View Controller framework.

![MVC framework Diagram](/assets/images/MVC-Process.svg)

- The user interacts with controller elements via clicks, forms, etc.

- The controller changes database (mySQL) information.

- The model then updates the view with changes.

- This is the front-end that the user sees.

---

## Building Process

The first step in creation is the folder structure.

The major 5 folders are:

- **_assets_**: holds css, js, image files

* **_classes_**: Holds the classes needed for manipulation of controllers, models, and messages
* **_controllers_**: contains files with logic to process user requests such as login, registeration, and shares posting
* **_models_**: contains the methods (queries) used in database manipulation
* **_views_**: contains the DOM elements visible to user including the home, share, add, login, and register pages.

### The Config files:

- **_.htaccess_**: a config file used in Apache databases. In this case, its for redirection.

* **_config.php_**: contains constants such as Database name, password, etc as well as ROOT_URL definitions
* **_index.php_**: This file ensures all of the controllers, config, models, and classes are instantiated. Also ensures all the pages are in session which is need to for login.

## Classes Folder

### Bootstrap.php

This file takes in requests or URL, and process the controller and action calls. When the user types in the URL or makes a request, the controller and/or action is automatically performed. This due to both methods being in the magic method \_\_construct as seen below:

    public function \_\_construct($request){

        $this-> request = $request;
        if($this-> request['controller']==""){
    $this->controller = 'home';

        }else{
            $this->controller = $this ->request['controller'];
        }
        if($this->request['action'] ==""){
            $this -> action = 'index';

        }else{
            $this -> action = $this->request['action'];
        }

    }

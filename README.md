# What is shareboard?

Hello!
This project is a message board system termed 'shareboard' complete with login. The posts are called "shares".

Shareboard was made with the intention of practicing php and MVC frameworks. It uses a custom MVC framework a Eduonix course called Learn Object PHP By Building a Complete Website. This is the core project made from that course. The extensive documentation I made is to help improve my learning of course and help others taking learning as well. 

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

- The view contains the front-end that the user sees.

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

- **_.htaccess_**: a config file used in Apache databases. In this case, it is for getting \_GET requests from the URL.

* **_config.php_**: contains constants such as Database name, password, etc as well as ROOT_URL definitions
* **_index.php_**: This file ensures all of the controllers, config, models, and classes are instantiated. Also ensures all the pages are in session which is needed to for login.

# Classes Folder

## Bootstrap.php

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

Line 4 (...request['controller']==""...) redirects the user to the home page if no controller is specified. Else process the request.

Example: dev.localhost/shares goes to the shares page. Same logic for action.

Example: dev.localhost/users/register Registers the user.

Bootstrap.php also creates new controllers via the method createController();

It first checks if the parent class, controller, and method for the action exists before instantiation of a new controller. It also provides validation error messages stating which element is preventing controller creation.

### .htaccess

The RewriteEngine On enables the ability to rewrite the requests. A rewrite rule is made that states the first parameter is a controller, the second is action, and third is parameter in the action such as an id. This is how classes/Bootstrap.php is able to \_GET from the URL.

### index.php

Starts a new object based off the bootstrap class using the \_GET super global from the URL.

### Controller.php

Controller.php is an abstract class that other classes can extend from it. In this way, it serves as a template.

    public function __construct($action, $request){
    	$this->action = $action;
    	$this->request = $request;
    }

    public function executeAction(){
    	    return $this->{$this->action}();
        }

    protected function returnView($viewmodel, $fullview){
        $view = 'views/'. get_class($this). '/' . $this->action. '.php';
        if($fullview){
    	    require('views/main.php');
        } else {
    	    require($view);
        }
    }

- **_\_\_construct()_** defines the action and request of the new controller.

- **_executeAction()_** returns the previously defined action.

- **_returnView()_** allows the creation of views.

- **_$viewmodel_** passes values to the view from the controllers.

- **_$fullview_** requires the view file.

- **_$view_** The names of the views are the same as the class so that $view can create correctly contruct the URL.

## Model

The model class is an abstract class that sends queries.

$dbh is a handler for the new PDO (php data object). It contain database credentials. The DB_HOST, DB_NAME, and other constants are defined in the root config.php file.

$stmt is the handler of queries.

# Controller files

home.php, shares.php, and users.php all extends the Controller class.

shares.php contain the add method. If the user is logged in, they can add a new share.

users.php contains protected user controller of registration, login, and logout.

# Models and mySQL

models/share.php, models/user.php and login() need their own tables in a database.

share.php table require rows for title, body, link, and user_id.

user.php table require name,email, and password.

login() require email and password.

The query method inserts SQL code into the database.

The bind method connects data from $post to the mySQL database.

The login method compares the information received from $post with the that is in the database.

This project uses md5 encryption for passwords.

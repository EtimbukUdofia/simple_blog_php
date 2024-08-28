<?php

use core\Session;

$errors = Session::get("errors");

require "views/registration/create.view.php";
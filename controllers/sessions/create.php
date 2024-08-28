<?php

use core\Session;

$errors = Session::get("errors");

require "views/sessions/create.view.php";
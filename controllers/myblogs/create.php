<?php

use core\Session;

$heading = "Create Bog";

$errors = Session::get("errors") ?? [];

require "views/myblogs/create.view.php";
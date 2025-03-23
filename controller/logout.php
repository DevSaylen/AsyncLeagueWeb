<?php

session_start();
session_destroy();
header('Location: ../view/form_login.php');
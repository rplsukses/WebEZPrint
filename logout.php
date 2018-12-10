<?php

session_start();
session_unset("mitra");
header("Location: index.php");
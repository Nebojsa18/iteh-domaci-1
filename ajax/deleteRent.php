<?php

include('../Database.php');
include('../models/Rent.php');

Rent::deleteRent($_POST['rent_id'], $conn);
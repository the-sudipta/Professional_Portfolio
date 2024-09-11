<?php
global $frontend_routes;
require './routes.php';
require './utils/system_functions.php';

session_start();
$main_portfolio_landing_page = $frontend_routes['portfolio'];
navigate($main_portfolio_landing_page);


?>
<?php
session_start();
unset($_SESSION['details']);
unset($_SESSION['quantity']);
unset($_SESSION['sell_quantity']);
unset($_SESSION['price_perUnit']);
unset($_SESSION['revenue']);
unset($_SESSION['worked_month_actual']);
unset($_SESSION['cash_actual']);
header('Location:output_revenue.php');

?>
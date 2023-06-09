<?php
    function index() {
        include_once('Config/connect.php');
        $sql_orders = "SELECT orders_detail.*, orders.*, customer.cus_name, customer.cus_phone, customer.cus_address, product_detail.*, user.*
        FROM orders_detail
        INNER JOIN orders ON orders_detail.orders_id = orders.orders_id
        INNER JOIN customer ON orders.cus_id = customer.cus_id
        INNER JOIN product_detail ON orders_detail.prd_detail_id = product_detail.prd_detail_id
        INNER JOIN user ON orders_detail.user_id = user.user_id";
        $orders_detail= mysqli_query($connect, $sql_orders);

        $sql_product = "SELECT product_detail.*, product.*
        FROM product_detail
        INNER JOIN product ON product_detail.prd_id = product.prd_id";
        $product_detail= mysqli_query($connect, $sql_product);
        include_once('Config/close_connect.php');
        $record = array();
        $record['orders_detail'] = $orders_detail;
        $record['product_detail'] = $product_detail;
        return $record;
    }
    function confirm() {
        $orders_id = $_GET['orders_id'];
        include_once('Config/connect.php');
        $update_orders = mysqli_query($connect, "UPDATE orders SET orders_status = 1 WHERE orders_id = $orders_id");

        $user_email = $_SESSION['user_email'];
        $user_password = $_SESSION['user_password'];
        $user = mysqli_query($connect, "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'");
        foreach ($user as $item) {
            $_SESSION['user_id'] = $item['user_id'];
        }
        $user_id = $_SESSION['user_id'];
        $update_orders_detail = mysqli_query($connect, "UPDATE orders_detail SET user_id = $user_id WHERE orders_id = $orders_id");

        include_once('Config/close_connect.php');
    }
    function back() {
        $orders_id = $_GET['orders_id'];
        include_once('Config/connect.php');
        $update_orders = mysqli_query($connect, "UPDATE orders SET orders_status = 0 WHERE orders_id = $orders_id");

        $user_email = $_SESSION['user_email'];
        $user_password = $_SESSION['user_password'];
        $user = mysqli_query($connect, "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'");
        foreach ($user as $item) {
            $_SESSION['user_id'] = $item['user_id'];
        }
        $user_id = $_SESSION['user_id'];
        $update_orders_detail = mysqli_query($connect, "UPDATE orders_detail SET user_id = $user_id WHERE orders_id = $orders_id");

        include_once('Config/close_connect.php');
    }
    function destroy() {
        $orders_id = $_GET['orders_id'];
        $prd_detail_id = $_GET['prd_detail_id'];
        $cus_id = $_GET['cus_id'];
        include_once('Config/connect.php');
        $sql = "DELETE FROM orders_detail WHERE orders_id = $orders_id AND prd_detail_id = $prd_detail_id;
        DELETE FROM orders WHERE orders_id = $orders_id;
        DELETE FROM customer WHERE cus_id = $cus_id;";
        $record = $connect->multi_query($sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    switch ($action) {
        case '':
            $record = index();
            break;
        case 'confirm':
            confirm();
            break;
        case 'back':
            back();
            break;
        case 'destroy':
            $record = destroy();
            break;
        default:
            # code...
            break;
    }
?>
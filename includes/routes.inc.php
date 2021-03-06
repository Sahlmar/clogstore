<?php
// routes.inc.php

$isAdmin = false;
// admin controllers
//if ($user->isUserAdmin()) {
if($isAdmin == true){
	$routes = array(
		'frontPage' => 'admin_frontPage_controller.php',
		'createProduct' => 'admin_createProduct_controller.php',
		'deleteProduct' => 'admin_deleteProduct_controller.php',
		'editProduct' => 'admin_editProduct_controller.php',
		'createCategory' => 'admin_createCategory_controller.php',
		'deleteCategory' => 'admin_deleteCategory_controller.php',
		'createAttribute' => 'admin_createAttribute_controller.php',
		'deleteAttribute' => 'admin_deleteAttribute_controller.php',
		'manageOrders' => 'admin_manageOrders_controller.php',
		'createUser' => 'admin_createUser_controller.php',
		'deleteUser' => 'admin_deleteUser_controller.php',
		'editUser' => 'admin_editUser_controller.php',
		'editFooter' => 'admin_editFooter_controller.php',
		'editPage' => 'admin_editPage_controller.php',
		'addProductImage' => 'admin_addProductImage_controller.php',
	);
} else {
// user controllers

	$routes  = array(
		'cart' => 'cart_controller.php',
		'checkout' => 'checkout_controller.php',
		'confirmation' => 'confirmation_controller.php',
		'default' => 'default_controller.php',
		'footer' => 'footer_controller.php',
		'header' => 'header_controller.php',
		'log_in' => 'log_in_controller.php',
		'my_account' => 'my_account_controller.php',
		'order_history' => 'order_history_controller.php',
		'product' => 'product_controller.php',
		'products' => 'products_controller.php',	
		'sign_in' => 'sign_in_controller.php',
		'sign_up' => 'sign_up_controller.php',
		'thanks' => 'thanks_controller.php',
		'user_delete' => 'user_delete_controller.php',
		'user_edit' => 'user_edit_controller.php',
		'change_password' => 'change_password_controller.php',
		'log_out' => 'log_out_controller.php',
		'upload_photo'  => 'upload_photo_controller.php'
	);
}

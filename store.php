<?php
include_once ('shoppingCartItem.php');
include_once ('shoppingCart.php');
/**
 * Created by PhpStorm.
 * User: DeMario
 * Date: 2/23/2017
 * Time: 11:16 PM
 */
    $total = "0.0";
    $shoppingCartItemName ="LG Monitor";
    $shoppingCartItemSalePrice = "20.00";
    $shoppingCartItemProductID = "1001";

    $Cartitem = new shoppingCartItem($shoppingCartItemName,$shoppingCartItemSalePrice, $shoppingCartItemProductID);
    $shoppingCart = new ShoppingCart($total);
    $shoppingCart ->addItemToCart($Cartitem);

    $shoppingCartItemName ="HP Monitor";
    $shoppingCartItemSalePrice = "25.30";
    $shoppingCartItemProductID = "1002";

    $Cartitem = new shoppingCartItem($shoppingCartItemName,$shoppingCartItemSalePrice, $shoppingCartItemProductID);
    $shoppingCart ->addItemToCart($Cartitem);


    echo "Shopping Cart Balance: $ ". $shoppingCart->getShoppingCartBalance();
    echo "Number of items in cart:  ".$shoppingCart->getNumberOfitemsinCart();



?>
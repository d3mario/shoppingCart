<?php
include_once  'shoppingCartItem.php';

class ShoppingCart
{
    private $shoppingCartItem = array();
    private $total ="0.00";
    private $NOVALUE = 0.00;
    private $hasCoupon = False;
    private $numberOfitemsinCart = 0;

    public function __construct($total)
    {
        $this->total = $total;
    }

    public function addItemToCart(shoppingCartItem $shoppingCartItem, $equation)
    {
        //checkForExceptionBeforeAddingItemToCart($shoppingCartItem);
        if ($shoppingCartItem instanceof shoppingCartItem)
        {
            $itemNumberInCart = $this->getNumberOfitemsinCart();
            $this->shoppingCartItem[] = $shoppingCartItem;
            $cartItemSalePrice = $this->shoppingCartItem[$itemNumberInCart]->getShoppingCartItemSalePrice();
            $this->calculateRunningTotal($equation,$cartItemSalePrice);
            $this->increaseNumberOfItemsInCartCounter();
        }
    }

    private function calculateRunningTotal($equation = "add", $amount)
    {
        switch( $equation )
        {
            case "add":
                $this->total += $amount;
                break;
            case "subtract":
                $this->total -= $amount;
                break;
            case "coupon":
                $this->total += $amount;
                break;
            default:
                $this->total += $this->NOVALUE;
                break;

        }

    }
    private function checkForExceptionBeforeAddingItemToCart(shoppingCartItem $shoppingCartItem)
    {
        try{
            echo 'Item was added to the cart successfully';
            $this->increaseNumberOfItemsInCartCounter();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    public function removeItemFromCart(shoppingCartItem $shoppingCartItem)
    {
        $this->numberOfitemsinCart--;
    }

    private function increaseNumberOfItemsInCartCounter()
    {
        $this->numberOfitemsinCart++;
    }

    /**
     * @return int
     */
    public function getNumberOfitemsinCart()
    {
        return $this->numberOfitemsinCart;
    }
    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     * @return ShoppingCart
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isHasCoupon()
    {
        return $this->hasCoupon;
    }
    /**
     * @param boolean $hasCoupon
     * @return ShoppingCart
     */
    public function setHasCoupon($hasCoupon)
    {
        if ($hasCoupon = true)
        {
            $this->hasCoupon = $hasCoupon;
        }
        return $this;
    }
    public function getShoppingCartBalance()
    {
        return $this->total;
    }

    public function getShoppingCartItem($arrayItem)
    {
        return $this->shoppingCartItem[$arrayItem];
    }
}
?>
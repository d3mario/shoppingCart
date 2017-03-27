<?php
include_once  'shoppingCartItem.php';

class ShoppingCart
{
    private $shoppingCartItem = array();
    private $total ="0.00";
    private $NOVALUE = 0.00;
    private $hasCoupon = False;
    private $numberOfitemsinCart = 0;
    private $equation = "";
    public $MAX_CART_QUANITY = 100;


    public function __construct($total)
    {
        $this->total = $total;
    }

    public function addItemToCart(shoppingCartItem $shoppingCartItem)
    {
        //checkForExceptionBeforeAddingItemToCart($shoppingCartItem);
        if ($shoppingCartItem instanceof shoppingCartItem)
        {
            $this->equation="add";
            $itemNumberInCart = $this->getNumberOfitemsinCart();
            $this->shoppingCartItem[] = $shoppingCartItem;
            $cartItemSalePrice = $this->shoppingCartItem[$itemNumberInCart]->getShoppingCartItemSalePrice();
            $this->calculateRunningTotal($this->equation,$cartItemSalePrice);
            $this->increaseNumberOfItemsInCartCounter();
        }
    }

    private function calculateRunningTotal($equation, $amount)
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
        echo 'Item was added to the cart successfully';
        $this->numberOfitemsinCart++;
    }

    private function updateNumberOfItemsInCartCounter($equation)
    {
        if ($this->numberOfitemsinCart <= $this->MAX_CART_QUANITY )
        {
            try{
                echo 'Item was added to the cart successfully';
                switch ($equation)
                {
                    case "add":
                        $this->increaseNumberOfItemsInCartCounter();
                        break;
                    case "subtract":
                        $this->decreaseNumberOfItemsInCartCounter();
                        break;
                    default:
                        $this->numberOfitemsinCart += $this->NOVALUE;
                        break;
                }
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }

    }
    /**
     * @return int
     */
    public function getNumberOfitemsinCart()
    {
        return $this->numberOfitemsinCart;
    }
    /**
     * @return Grand total of the shopping cart in US Currency
     */
   /* public function getTotal()
    {
        setlocale(LC_MONETARY, "en_US");
        return $currencyTotal = money_format("%10.2n", $this->total);
    }
*/
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

    /**
     * @return string $currencyTotal
     * @internal param string $currencyTotal
     * @internal param string $total Returns $currencyTotal which stores the shopping cart balance after
     * formating $this->total with two decimal places
     */
    public function getShoppingCartBalance()
    {
        return '$'.$currencyTotal = number_format($this->total, 2).' ';
    }

    public function getShoppingCartItem($arrayItem)
    {
        return $this->shoppingCartItem[$arrayItem];
    }
}
?>
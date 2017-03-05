<?php
class shoppingCartItem
{
    private $shoppingCartItemName;
    private $shoppingCartItemSalePrice;
    private $shoppingCartItemRetailPrice;
    private $shoppingCartItemWeight;
    private $shoppingCartItemDescriptiont;
    private $shoppingCartItemProductID;
    private $shoppingCartItemImage;
    private $shoppingCartItemTotalPrice;
    private $shoppingCartItemQuantity;

    public function __construct($shoppingCartItemName, $shoppingCartItemSalePrice, $shoppingCartItemProductID)
    {
        $this->shoppingCartItemProductID = $shoppingCartItemProductID;
        $this->shoppingCartItemName = $shoppingCartItemName;
        $this->shoppingCartItemSalePrice = $shoppingCartItemSalePrice;
    }

    public function setShoppingCartItemName($shoppingCartItemName)
    {
        $this->$shoppingCartItemName = $shoppingCartItemName;
    }

    public function setFoodItemCategory($foodItemCategory)
    {
        $this->shoppingCartItemName = $foodItemCategory;
    }

    public function setShoppingCartItemSalePrice($shoppingCartItemSalePrice)
    {
        $this->shoppingCartItemSalePrice = $shoppingCartItemSalePrice;
    }

    public function setShoppingCartItemRetailPrice($shoppingCartItemRetailPrice)
    {
        $this->shoppingCartItemRetailPrice = $shoppingCartItemRetailPrice;
    }


    public function getShoppingCartItemProductID()
    {
        return $this->shoppingCartItemProductID;
    }

    public function getShoppingCartItemName()
    {
        return $this->shoppingCartItemName;
    }

    public function getShoppingCartItemSalePrice()
    {
        return $this->shoppingCartItemSalePrice;
    }

    public function getShoppingCartItemRetailPrice()
    {
        return $this->shoppingCartItemRetailPrice;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartItemWeight()
    {
        return $this->shoppingCartItemWeight;
    }

    /**
     * @param mixed $shoppingCartItemWeight
     */
    public function setShoppingCartItemWeight($shoppingCartItemWeight)
    {
        $this->shoppingCartItemWeight = $shoppingCartItemWeight;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartItemDescriptiont()
    {
        return $this->shoppingCartItemDescriptiont;
    }

    /**
     * @param mixed $shoppingCartItemDescriptiont
     */
    public function setShoppingCartItemDescriptiont($shoppingCartItemDescriptiont)
    {
        $this->shoppingCartItemDescriptiont = $shoppingCartItemDescriptiont;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartItemImage()
    {
        return $this->shoppingCartItemImage;
    }

    /**
     * @param mixed $shoppingCartItemImage
     */
    public function setShoppingCartItemImage($shoppingCartItemImage)
    {
        $this->shoppingCartItemImage = $shoppingCartItemImage;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartItemTotalPrice()
    {
        return $this->shoppingCartItemTotalPrice;
    }

    /**
     * @param mixed $shoppingCartItemTotalPrice
     */
    public function setShoppingCartItemTotalPrice($shoppingCartItemTotalPrice)
    {
        $this->shoppingCartItemTotalPrice = $shoppingCartItemTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartItemQuantity()
    {
        return $this->shoppingCartItemQuantity;
    }

    /**
     * @param mixed $shoppingCartItemQuanti
     * .ty
     */
    public function setShoppingCartItemQuantity($shoppingCartItemQuantity)
    {
        $this->shoppingCartItemQuantity = $shoppingCartItemQuantity;
    }


}

?>
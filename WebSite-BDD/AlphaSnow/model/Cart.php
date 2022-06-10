<?php

class Cart
{
//region private attributes
    private float $totalPrice;
    private int $nbOfArticles;
    private array $items = array();
    //endregion private attributes

    //region private methods
    private function SetTotal($items)
    {
        $this->totalPrice = (double)0;
        foreach ($items as $CartItem) {
            $this->totalPrice += $CartItem->GetTotalPrice();
        }
    }

    private function SetNbOfArticles($items)
    {
        $this->nbOfArticles = 0;
        foreach ($items as $CartItem) {
            $this->nbOfArticles += $CartItem->getQuantity();
        }
    }

    private function UpdateTotals()
    {
        $this->SetNbOfArticles($this->items);
        $this->SetTotal($this->items);
    }
    //endregion private methods

    //region accessors and mutators
    public function GetTotalPrice()
    {
        return $this->totalPrice;
    }

    public function GetItems()
    {
        return $this->items;
    }

    public function GetNbOfArticles()
    {
        return $this->nbOfArticles;
    }
    //endregion accessors and mutators

    //region public methods
    public function AddItemInCart($cartItemToAdd)
    {
        $updated = false;
        if(count($this->items) != 0){
            foreach ($this->items as $cartItem) {
                if ($cartItem->GetArticleId() == $cartItemToAdd->GetArticleId()) {
                    //we update the quantity of the existing article
                    $cartItem->SetQuantity($cartItem->GetQuantity() + $cartItemToAdd->GetQuantity());
                    $updated = true;
                    break;
                }
            }
        }
        if(!$updated){
            //this is a new article to add
            //require "articlesManager.php"; //FAO renamed findArticleWithId
            $itemsAttributes = findArticleWithId($cartItemToAdd->GetArticleId());
            $cartItemToAdd->SetAttributes($itemsAttributes['description'], $itemsAttributes['photo'], $itemsAttributes['price']);
            $this->items[] = $cartItemToAdd;

        }
        $this->UpdateTotals();
    }

    public function UpdateItemInCart($cartItemToAdd)
    {
        if(count($this->items) != 0){
            $index = 0;
            foreach ($this->items as $cartItem) {
                if ($cartItem->GetArticleId() == $cartItemToAdd->GetArticleId()) {
                    //we update the quantity of the existing article
                    $cartItem->SetQuantity($cartItemToAdd->GetQuantity());
                    if ($cartItemToAdd->GetQuantity() == 0) {
                        array_splice($this->items,$index, 1);
                    }
                    break;
                }
                $index++;
            }
        }
        $this->UpdateTotals();
    }

}

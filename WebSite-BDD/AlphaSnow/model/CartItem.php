<?php


class CartItem
{
//region private attributes
    private string $articleId;
    private string $description;
    private string $imgPath;
    private float $price;
    private int $quantity;
    private float $totalPrice;
//endregion private attributes

//region constructor
    public function __construct($articleId, $quantity)
    {
        $this->articleId = $articleId;
        $this->quantity = $quantity;
    }
//endregion constructor

//region private methods
    private function updateTotal(){
        $this->totalPrice = $this->price * $this->quantity;
    }
//endregion private methods

//region accessors and mutators
    public function GetArticleId()
    {
        return $this->articleId;
    }

    public function GetDescription()
    {
        return $this->description;
    }

    public function GetImgPath()
    {
        return $this->imgPath;
    }

    public function GetQuantity()
    {
        return $this->quantity;
    }

    public function SetQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->updateTotal();
    }

    public function GetPrice()
    {
        return $this->price;
    }

    public function GetTotalPrice()
    {
        return $this->totalPrice;
    }
//endregion accessors and mutators

//region public methods
    public function SetAttributes($description, $imgPath, $price){
        $this->description = $description;
        $this->imgPath = $imgPath;
        $this->price = $price;
        $this->updateTotal();
    }
//endregion public methods
}


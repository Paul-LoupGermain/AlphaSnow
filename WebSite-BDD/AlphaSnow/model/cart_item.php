<?php

    class cart_item
    {
    //region private attributes
        private string $article_id;
        private string $description;
        private string $img_path;
        private float $price;
        private int $quantity;
        private float $total_price;
    //endregion private attributes

    //region constructor
        public function __construct($article_id, $quantity)
        {
            $this->article_id = $article_id;
            $this->quantity = $quantity;
        }
    //endregion constructor

    //region private methods
        private function update_total()
        {
            $this->total_price = $this->price * $this->quantity;
        }
    //endregion private methods

    //region accessors and mutators
        public function get_article_id()
        {
            return $this->article_id;
        }

        public function get_description()
        {
            return $this->description;
        }

        public function get_img_path()
        {
            return $this->img_path;
        }

        public function Get_quantity()
        {
            return $this->quantity;
        }

        public function set_quantity($quantity)
        {
            $this->quantity = $quantity;
            $this->update_total();
        }

        public function get_price()
        {
            return $this->price;
        }

        public function get_total_price()
        {
            return $this->total_price;
        }
    //endregion accessors and mutators

    //region public methods
        public function set_attributes($description, $img_path, $price)
        {
            $this->description = $description;
            $this->img_path = $img_path;
            $this->price = $price;
            $this->update_total();
        }
    //endregion public methods
    }


<?php

    class cart
    {
    //region private attributes
        private float $total_price;
        private int $nb_of_articles;
        private array $items = array();
        //endregion private attributes

        //region private methods
        private function set_total($items)
        {
            $this->total_price = (double)0;
            foreach ($items as $cart_item)
            {
                $this->total_price += $cart_item->get_total_price();
            }
        }

        private function set_nb_of_articles($items)
        {
            $this->nb_of_articles = 0;
            foreach ($items as $cart_item)
            {
                $this->nb_of_articles += $cart_item->get_quantity();
            }
        }

        private function update_totals()
        {
            $this->set_nb_of_articles($this->items);
            $this->set_total($this->items);
        }
        //endregion private methods

        //region accessors and mutators
        public function get_total_price()
        {
            return $this->total_price;
        }

        public function get_items()
        {
            return $this->items;
        }

        public function get_nb_of_articles()
        {
            return $this->nb_of_articles;
        }
        //endregion accessors and mutators

        //region public methods
        public function add_item_in_cart($cart_item_to_add)
        {
            $updated = false;
            if(count($this->items) != 0)
            {
                foreach ($this->items as $cart_item)
                {
                    if ($cart_item->get_article_id() == $cart_item_to_add->get_article_id())
                    {
                        //we update the quantity of the existing article
                        $cart_item->set_quantity($cart_item->get_quantity() + $cart_item_to_add->get_quantity());
                        $updated = true;
                        break;
                    }
                }
            }
            if(!$updated)
            {
                //this is a new article to add
                //require "articlesManager.php"; //FAO renamed findArticleWithId
                $items_attributes = find_article_with_id($cart_item_to_add->get_article_id());
                $cart_item_to_add->SetAttributes($items_attributes['description'], $items_attributes['photo'], $items_attributes['price']);
                $this->items[] = $cart_item_to_add;

            }
            $this->update_totals();
        }

        public function update_item_in_cart($cart_item_to_add)
        {
            if(count($this->items) != 0)
            {
                $index = 0;
                foreach ($this->items as $cart_item)
                {
                    if ($cart_item->get_article_id() == $cart_item_to_add->get_article_id())
                    {
                        //we update the quantity of the existing article
                        $cart_item->set_quantity($cart_item_to_add->get_quantity());
                        if ($cart_item_to_add->get_quantity() == 0)
                        {
                            array_splice($this->items,$index, 1);
                        }
                        break;
                    }
                    $index++;
                }
            }
            $this->update_totals();
        }

    }

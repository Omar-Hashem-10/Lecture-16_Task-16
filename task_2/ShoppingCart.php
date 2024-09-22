<?php
class ShoppingCart {
    private $items = [];

    public function addItem($productId, $productName, $quantity, $price) {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] += $quantity;
        } else {
            $this->items[$productId] = [
                'name' => $productName,
                'quantity' => $quantity,
                'price' => $price
            ];
        }
    }

    public function removeItem($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        } else {
            echo "Product not found in cart.<br>";
        }
    }

    public function updateQuantity($productId, $newQuantity) {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] = $newQuantity;
        } else {
            echo "Product not found in cart.<br>";
        }
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'] * $item['price'];
        }
        return $total;
    }

    public function displayCart() {
        if (empty($this->items)) {
            echo "Your cart is empty.<br>";
        } else {
            foreach ($this->items as $productId => $item) {
                echo "Product ID: $productId<br>";
                echo "Name: " . $item['name'] . "<br>";
                echo "Quantity: " . $item['quantity'] . "<br>";
                echo "Price: $" . number_format($item['price'], 2) . "<br>";
                echo "-----------------------------------<br>";
            }
        }
    }

    public function clearCart() {
        $this->items = [];
        echo "Cart has been cleared.<br>";
    }
}
?>

<?php
class OrderModel extends Model 
{
    const TABLE = 'orders';

    public function createOrder($data) {
        
        $this->add(self::TABLE, $data);
    }

    public function createOrderDetail($data) {
        $this->add('orders_details', $data);
    }
}
?>
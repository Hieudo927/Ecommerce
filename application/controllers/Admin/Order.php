<?php

loadController('Api');

class Order extends Api {
    public $model = null;
    public function __construct(){
        parent::__construct();
        loadModel('Order_Model');
        $this->model = new Order_Model();
    }

    public function getCustomerOrders(){
        $result = $this->model->getCustomerOrders();
        return $result;
    }

    public function fetchOrderDetailsById(){
        if($_SERVER["REQUEST_METHOD"] !== "POST"){
            $this->invalidRequestType();
        }

        $orderId = $_GET['orderId'];
        $result = $this->model->fetchOrderDetails($orderId);
        $this->response($result);
    }
    
}

?>
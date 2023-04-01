<?php

class OpenQR_Charge
{
    /**
     * ¡ATENCIÓN! - Los atributos de la clase deben ser públicos para poder ser convertidos a JSON
     *  por la clase OpenQR_ChargeHandler.
     */
    public $method = "qr";
    public $amount;
    public $currency;
    public $confirm = false;
    public $description;
    public $order_id;
    //public $qr_options = Array("mode" => "DYNAMIC");
    public $customer;
    public $due_date;

    public function __construct(){}
    /*public function __construct($amount, $currency, $description, $order_id, $customer, $due_date){
        $this->amount = $amount;
        $this->currency = $currency;
        $this->description = $description;
        $this->order_id = $order_id;
        $this->customer = $customer;
        $this->$due_date = $due_date;
    }*/



    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getQrOptions()
    {
        return $this->qr_options;
    }

    /**
     * @param mixed $qr_options
     */
    public function setQrOptions($qr_options): void
    {
        $this->qr_options = $qr_options;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * @param mixed $due_date
     */
    public function setDueDate($due_date): void
    {
        $this->due_date = $due_date;
    }

}
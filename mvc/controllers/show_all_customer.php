<?php
    $showAllCustomer = new showAllCustomer();
    call_user_func(array($showAllCustomer, 'show'));
    class showAllCustomer
    {
        public function show()
        {
            require_once('./mvc/views/page/show_all_customer.php');
            require_once('./mvc/models/CustomerModel.php');
            $customerModel = new CustomerModel();
            $customer = $customerModel->showAllCustomers();
            // $row = mysqli_fetch_assoc($customer);
            return $customer;
        }
    }
    
?>
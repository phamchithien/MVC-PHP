<?php
    $showAllCustomer = new showAllCustomer();
    call_user_func(array($showAllCustomer, 'show'));
    class showAllCustomer
    {
        public function show()
        {
            require_once('./mvc/views/page/show_all_customer.html');
        }
    }
    
?>
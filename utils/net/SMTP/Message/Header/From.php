<?php

    /**
     * @package utils.net.SMTP.Message.Header
     * @filesource \utils\net\SMTP\Message\Header\From.php
     * @author Andrey Knupp Vital <andreykvital@gmail.com>
     */
    namespace utils\net\SMTP\Message\Header;
    use utils\net\SMTP\Message\AbstractAddressList;
    
    class From extends AbstractAddressList
    {
        
        /**
         * @see AbstractAddressList::getName()
         * @return string
         */
        public function getName()
        {
            return "From";
        }
    
    }
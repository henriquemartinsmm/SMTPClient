<?php

    /**
     * @package utils.net.SMTP.Message.Header.Type
     * @filesource \utils\net\SMTP\Message\Header\Type\Structured.php
     * @author Andrey Knupp Vital <andreykvital@gmail.com>
     * @link http://tools.ietf.org/html/rfc2822#section-2.2.2
     */
    namespace utils\net\SMTP\Message\Header\Type;
    use utils\net\SMTP\Message\Header;
    
    interface Structured extends Header
    {
        
        /**
         * Retrieves the delimiter which a header line should be wrapped
         * @return string
         */
        public function getDelimiter();
        
    }
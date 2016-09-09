<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;

        function __construct($newName, $newPhone, $newAddress)
        {
            $this->name = $newName;
            $this->phone = $newPhone;
            $this->address = $newAddress;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($newName)
        {
            $this->name = $newName;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setPhone($newPhone)
        {
            $this->phone = $newPhone;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setAddress($newAddress)
        {
            $this->address = $newAddress;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>

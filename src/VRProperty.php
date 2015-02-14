<?php
/**
 * @file VRProperty.php
 * @project VRProperty
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 2/14/15 2:15 PM
 */

namespace Gueststream\VRP;

/**
 * Vacation Rental Property Class
 * @package Gueststream\VRP
 */
class VRProperty
{
    protected $name;
    protected $propertyCode;
    protected $address1;
    protected $address2;
    protected $city;
    protected $state;
    protected $postalCode;
    protected $country;
    protected $province;
    protected $bedrooms;
    protected $bathrooms;
    protected $type;
    protected $area;
    protected $location;
    protected $view;
    protected $latitude;
    protected $longitude;
    protected $complexName;
    protected $description;
    protected $shortDescription;
    protected $sleeps;
    protected $maxAdults;
    protected $status;
    protected $smoking;
    protected $handicapAccessible;
    protected $phone;

    public function __construct()
    {

    }

    public function __set($name, $value)
    {
        $setMethod = "set".$name;
        if(method_exists($this,$setMethod)){
            return $this->$setMethod($value);
        }

        $this->$name = $value;
        return true;
    }

    public function __get($name)
    {
        $getMethod = "get".$name;
        if(method_exists($this,$getMethod)) {
            return $this->$getMethod();
        }

        if(isset($this->$name)) {
            return $this->$name;
        }

        return false;
    }
}

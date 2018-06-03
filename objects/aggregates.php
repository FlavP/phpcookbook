<?php

class Address{
    protected $city;
    protected $country;

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

}

class Person {
    protected $name;
    protected $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __call($method, $arguments)
    {
        // TODO: Implement __call() method.
        if(method_exists($this->address, $method)){
            return call_user_func_array(array($this->address, $method), $arguments);
        }
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->address = clone $this->address;
    }
}

$dave = new Person();

$dave->setName("Dave Wonderman");
$dave->setCity("Bucharest");

$albert = clone $dave;

$albert->setName('Albert Pennyworth');
$albert->setCity('Budapest');

print $dave->getName() . ' lives in ' . $dave->getCity();
print $albert->getName() . ' lives in ' . $albert->getCity();
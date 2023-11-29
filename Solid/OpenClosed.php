<?php

interface Format
{
    public function format($string);
}

interface Delivery
{
    public function deliver($format);
}

class RawFormat implements Format
{
    public function format($string)
    {
        return $string;
    }
}

class DateFormat implements Format
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class DetailFormat implements Format
{
    public function format($string)
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class Email implements Delivery
{
    public function deliver($format)
    {
        echo "Вивід формату ({$format}) на електронну пошту";
    }
}

class Sms implements Delivery
{
    public function deliver($format)
    {
        echo "Вивід формату ({$format}) по SMS";
    }
}

class Consol implements Delivery
{
    public function deliver($format)
    {
        echo "Вивід формату ({$format}) в консоль";
    }
}

class Logger
{

    private $format;
    private $delivery;

    public function __construct(Format $format, Delivery $delivery)
    {
        $this->format = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $formatString = $this->format->format($string);
        $this->delivery->deliver($formatString);
    }
}

$logger = new Logger(new DetailFormat(), new Consol());
$logger->log('Emergency error! Please fix me!');







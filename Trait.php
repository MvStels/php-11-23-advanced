<?php
trait  Trait1
{
    public function test()
    {
        return 1;
    }

}
trait  Trait2
{
    public function test()
    {
        return 2;
    }

}
trait  Trait3
{
    public function test()
    {
        return 3;
    }

}
class Test{
    use Trait1 ,Trait2,Trait3
    {
        Trait1::test insteadof Trait2;
        Trait2::test insteadof Trait3;
        Trait3::test insteadof Trait1;
        Trait1::test as talk1;
        Trait2::test as talk2;
        Trait3::test as talk3;
    }
}
$getsum = new Test( );
d ($getsum->talk1()+$getsum->talk2()+$getsum->talk3());


<?php

namespace Naiksahana\MyCustomPackage;

class MyClass
{
    public function sayHello()
    {
        return 'Hello from my custom package!';
    }

    public function generateOtp(int $length = 6): string
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $otp = '';

        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $otp;
    }
}
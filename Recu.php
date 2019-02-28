<?php
Class Be
{
    public function cee($n)
    {
        /** Тут я передбачаю, що може бути варіант помилки і оскільки
         * не хочу довіряти обробку помилки цьому методу "сее", буду кидати
         * об'єкт помилки. В іншому випадку метод видасть штатний результат
         */ 
        if ($n==0 || !is_int($n)){
            throw new Exception(' Ohhh');
        }
        else 
            return $result=10/$n;
    }
}

$r = new Be;

try {
    echo "this " . $r->cee(4);
}
catch (Exception $a){
    echo "NO" . $a->getMessage();
}
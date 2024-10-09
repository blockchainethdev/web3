<?php
/**
 * Created by PhpStorm.
 * User: Lingan
 * Date: 2017/11/6
 * Time: 21:39
 */

namespace Blockchainethdev\Contract;

class Contract
{
    public function encode_abi($functionName,$args)
    {
        print_r($args);
        echo $functionName;
    }
}
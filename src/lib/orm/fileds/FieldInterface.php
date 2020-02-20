<?php

namespace lib\orm;

use lib\orm\fields\ValueInterface;

interface FieldInterface
{
    public  function getName(): String;

    public function getType(): String;

    public function getLength(): Int;

    public function getValue(): ValueInterface;

}
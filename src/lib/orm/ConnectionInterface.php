<?php

namespace  lib\orm;

interface ConnectionInterface
{
    public function connect(CredentialInterface $credentials): void;
}
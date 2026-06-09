<?php

namespace app\commands;

interface ICommand {

    public string $name;

    public function execute();
}

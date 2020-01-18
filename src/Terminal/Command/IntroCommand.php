<?php
declare(strict_types=1);


namespace App\Terminal\Command;


use App\Object\CommandOutput;

class IntroCommand implements Command
{
    public function execute(array $params): CommandOutput
    {
        return new CommandOutput(<<<STDOUT
I'm a software engineer based in London/Prague specializing in building
reliable back ends, helping out with smaller scale DevOps and soaking in
knowledge like a sponge.
STDOUT
        );
    }
}
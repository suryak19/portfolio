<?php
declare(strict_types=1);


namespace App\Terminal\Command;


use App\Object\CommandOutput;

class NotFoundCommand implements Command
{
    function execute(array $params): CommandOutput
    {
        $template = <<<'STDOUT'

Command '%s' not found, did you mean:

  command 'ls' from hoffibox
  command 'man' from hoffibox
  command 'rm -Rf /' from hoffibox

Try: sudo apt install <deb name>

STDOUT;

        return new CommandOutput(sprintf($template, $params[0]));
    }
}

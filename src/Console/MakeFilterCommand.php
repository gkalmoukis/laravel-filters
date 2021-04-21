<?php

namespace Happyonline\LaravelFilters\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;


class MakeFilterCommand extends GeneratorCommand
{
    protected $name = 'make:filter';

    protected $description = 'Create a new Filter class';

    protected $type = 'Filter';

    protected function getStub()
    {
        return __DIR__ . '/stubs/filter.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        if(is_null($this->option('model'))){
            $this->error('You must provide a model class');
            return false;
        }
        return $rootNamespace . '\Filters\\'.$this->option('model'); 
    }

    protected function getOptions()
    {
        return [
            ['model', null, InputOption::VALUE_REQUIRED, 'Add Model class name for filter']
        ];
    }

    public function handle()
    {
        parent::handle();
        
        $this->doOtherOperations();
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        // Update the file content with additional data (regular expressions)
        file_put_contents($path, $content);
    }
}
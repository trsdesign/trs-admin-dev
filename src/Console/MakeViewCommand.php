<?php

namespace TrsDesign\Admin\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use TrsDesign\Admin\ReplacesFileContents;

class MakeViewCommand extends Command
{
    use ReplacesFileContents;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trs-admin:view {resource : The name of the resource view that should be created}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new view for a given resource';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $stack = config('trs-admin.stack');

        $resource = $this->argument('resource');

        $resourceType = $this->choice('What type of view do you want to make?', ['index', 'show'], 'index');
        $resourceType = $resourceType.'.blade.php';

        $layout = $this->choice('What is the layout this view extends?', ['guest', 'app']);
        
        $content = $this->choice('What will be the main content? ', ['blank', 'table', 'form'], 'blank');
        $content = $content.'.blade.php';

        (new Filesystem)->ensureDirectoryExists(resource_path('views/'.$resource));

        copy(__DIR__.'/../../stubs/resources/'.$stack.'/views/page.blade.php', resource_path('views/'.$resource.'/'.$resourceType));

        // File contents...
        $this->replaceInFile('@extends($layout)', '@extends(\'layouts.'.$layout.'\')', resource_path('views/'.$resource.'/'.$resourceType));

        $this->replaceInFile('{{ $content }}', file_get_contents(__DIR__.'/../../resources/'.$stack.'/components/'.$content), resource_path('views/'.$resource.'/'.$resourceType));
    }
}
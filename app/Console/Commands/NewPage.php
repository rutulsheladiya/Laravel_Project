<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class NewPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NewPage {pageName} {--title=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is used for creating new blad file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pageName = $this->argument('pageName');
        $pageNameExt = $pageName . '.blade.php';
        $pageTitle = $this->option('title');
        $data = "
        @extends('admin/layout')
       @section('page_title', '";
        if ($pageTitle != "") {
            $data .= $pageTitle;
        } else {
            $data .= 'Default';
        }
        $data .= "');
        @section('" . $pageName . "_select', 'active');
       @section('mainContent')
       @endsection
        ";
        $filePath = resource_path('views/' . $pageNameExt);
        Storage::disk('views')->put($pageNameExt, $data);

        $this->info("Page created successfully at: " . $filePath);
    }
}

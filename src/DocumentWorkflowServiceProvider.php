<?php

namespace Sorethea\DocumentWorkflow;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

abstract class DocumentWorkflowServiceProvider extends PackageServiceProvider
{
    public  function configurePackage(Package $package): void{
        $package->name("document-workflow")
            ->name("document-workflow")
            ->hasConfigFile('document-workflow')
            ->hasMigration('create_document_workflow_table');
    }
}

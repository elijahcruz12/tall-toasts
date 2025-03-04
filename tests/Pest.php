<?php

declare(strict_types=1);

use Livewire\Component;
use Livewire\Response;
use Usernotnull\Toast\Concerns\WireToast;
use Usernotnull\Toast\Tests\TestCase;

uses(TestCase::class)->in('Feature', 'Unit');

function createFakeComponent()
{
    new class () extends Component {
        use WireToast;

        public function __construct()
        {
            parent::__construct();
            $this->dehydrate(new Response(request()));
        }
    };
}

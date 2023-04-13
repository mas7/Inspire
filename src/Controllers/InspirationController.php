<?php

namespace Mas7\Inspire\Controllers;

use Mas7\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}

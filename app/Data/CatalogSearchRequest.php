<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\In;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Data;

class CatalogSearchRequest extends Data
{
    public function __construct(
        #[In(['countries', 'ethnicities'])]
        public string $table,
        #[Min(20)]
        public string $searchTerm
    ) {
    }
}
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Pet;
use \Testing\petstore\Models\Shared\Category;
use \Testing\petstore\Models\Shared\PetStatus;
use \Testing\petstore\Models\Shared\Tag;
use \Testing\petstore\Models\Operations\AddPetFormSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new Pet();
    $request->category = new Category();
    $request->category->id = 1;
    $request->category->name = 'Dogs';
    $request->id = 10;
    $request->name = 'doggie';
    $request->photoUrls = [
        'provident',
        'distinctio',
        'quibusdam',
    ];
    $request->status = PetStatus::PENDING;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new AddPetFormSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->addPetForm($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->
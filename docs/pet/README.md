# pet

## Overview

Everything about your Pets

Find out more
<http://swagger.io>
### Available Operations

* [addPetForm](#addpetform) - Add a new pet to the store
* [addPetJson](#addpetjson) - Add a new pet to the store
* [addPetRaw](#addpetraw) - Add a new pet to the store
* [deletePet](#deletepet) - Deletes a pet
* [findPetsByStatus](#findpetsbystatus) - Finds Pets by status
* [findPetsByTags](#findpetsbytags) - Finds Pets by tags
* [getPetById](#getpetbyid) - Find pet by ID
* [updatePetWithForm](#updatepetwithform) - Updates a pet in the store with form data
* [updatePetForm](#updatepetform) - Update an existing pet
* [updatePetJson](#updatepetjson) - Update an existing pet
* [updatePetRaw](#updatepetraw) - Update an existing pet
* [uploadFile](#uploadfile) - uploads an image

## addPetForm

Add a new pet to the store

### Example Usage

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
        'illum',
        'vel',
        'error',
    ];
    $request->status = PetStatus::PENDING;
    $request->tags = [
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

## addPetJson

Add a new pet to the store

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Pet;
use \Testing\petstore\Models\Shared\Category;
use \Testing\petstore\Models\Shared\PetStatus;
use \Testing\petstore\Models\Shared\Tag;
use \Testing\petstore\Models\Operations\AddPetJsonSecurity;

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
        'magnam',
        'debitis',
    ];
    $request->status = PetStatus::AVAILABLE;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new AddPetJsonSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->addPetJson($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## addPetRaw

Add a new pet to the store

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\AddPetRawSecurity;

$sdk = Petstore::builder()
    ->build();

try {
'tempora'

    $requestSecurity = new AddPetRawSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->addPetRaw($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## deletePet

Deletes a pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\DeletePetRequest;
use \Testing\petstore\Models\Operations\DeletePetSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new DeletePetRequest();
    $request->apiKey = 'suscipit';
    $request->petId = 477665;

    $requestSecurity = new DeletePetSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->deletePet($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## findPetsByStatus

Multiple status values can be provided with comma separated strings

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\FindPetsByStatusRequest;
use \Testing\petstore\Models\Operations\FindPetsByStatusStatus;
use \Testing\petstore\Models\Operations\FindPetsByStatusSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new FindPetsByStatusRequest();
    $request->status = FindPetsByStatusStatus::SOLD;

    $requestSecurity = new FindPetsByStatusSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->findPetsByStatus($request, $requestSecurity);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## findPetsByTags

Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\FindPetsByTagsRequest;
use \Testing\petstore\Models\Operations\FindPetsByTagsSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new FindPetsByTagsRequest();
    $request->tags = [
        'voluptatum',
        'iusto',
        'excepturi',
        'nisi',
    ];

    $requestSecurity = new FindPetsByTagsSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->findPetsByTags($request, $requestSecurity);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getPetById

Returns a single pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\GetPetByIdRequest;
use \Testing\petstore\Models\Operations\GetPetByIdSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new GetPetByIdRequest();
    $request->petId = 925597;

    $requestSecurity = new GetPetByIdSecurity();
    $requestSecurity->apiKey = 'YOUR_API_KEY_HERE';

    $response = $sdk->pet->getPetById($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updatePetWithForm

Updates a pet in the store with form data

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UpdatePetWithFormRequest;
use \Testing\petstore\Models\Operations\UpdatePetWithFormSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new UpdatePetWithFormRequest();
    $request->name = 'Miss Raymond Hauck III';
    $request->petId = 832620;
    $request->status = 'sapiente';

    $requestSecurity = new UpdatePetWithFormSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->updatePetWithForm($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updatePetForm

Update an existing pet by Id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Pet;
use \Testing\petstore\Models\Shared\Category;
use \Testing\petstore\Models\Shared\PetStatus;
use \Testing\petstore\Models\Shared\Tag;
use \Testing\petstore\Models\Operations\UpdatePetFormSecurity;

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
        'odit',
        'at',
        'at',
        'maiores',
    ];
    $request->status = PetStatus::PENDING;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new UpdatePetFormSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->updatePetForm($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updatePetJson

Update an existing pet by Id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Pet;
use \Testing\petstore\Models\Shared\Category;
use \Testing\petstore\Models\Shared\PetStatus;
use \Testing\petstore\Models\Shared\Tag;
use \Testing\petstore\Models\Operations\UpdatePetJsonSecurity;

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
        'esse',
        'totam',
        'porro',
        'dolorum',
    ];
    $request->status = PetStatus::AVAILABLE;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new UpdatePetJsonSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->updatePetJson($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updatePetRaw

Update an existing pet by Id

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UpdatePetRawSecurity;

$sdk = Petstore::builder()
    ->build();

try {
'officia'

    $requestSecurity = new UpdatePetRawSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->updatePetRaw($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## uploadFile

uploads an image

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UploadFileRequest;
use \Testing\petstore\Models\Operations\UploadFileSecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new UploadFileRequest();
    $request->requestBody = 'occaecati';
    $request->additionalMetadata = 'fugit';
    $request->petId = 537373;

    $requestSecurity = new UploadFileSecurity();
    $requestSecurity->petstoreAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->pet->uploadFile($request, $requestSecurity);

    if ($response->apiResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

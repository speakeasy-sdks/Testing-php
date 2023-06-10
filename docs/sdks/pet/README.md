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
    $request->status = PetStatus::Pending;
    $request->tags = [
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new AddPetFormSecurity();
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->addPetForm($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Testing\petstore\Models\Shared\Pet](../../models/shared/Pet.md)                                       | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\Testing\petstore\Models\Operations\AddPetFormSecurity](../../models/operations/AddPetFormSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\Testing\petstore\Models\Operations\AddPetFormResponse](../../models/operations/AddPetFormResponse.md)**


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
    $request->status = PetStatus::Available;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new AddPetJsonSecurity();
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->addPetJson($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Testing\petstore\Models\Shared\Pet](../../models/shared/Pet.md)                                       | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\Testing\petstore\Models\Operations\AddPetJsonSecurity](../../models/operations/AddPetJsonSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\Testing\petstore\Models\Operations\AddPetJsonResponse](../../models/operations/AddPetJsonResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->addPetRaw($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [string](../../models//.md)                                                                           | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |
| `security`                                                                                            | [\Testing\petstore\Models\Operations\AddPetRawSecurity](../../models/operations/AddPetRawSecurity.md) | :heavy_check_mark:                                                                                    | The security requirements to use for the request.                                                     |


### Response

**[?\Testing\petstore\Models\Operations\AddPetRawResponse](../../models/operations/AddPetRawResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->deletePet($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Testing\petstore\Models\Operations\DeletePetRequest](../../models/operations/DeletePetRequest.md)   | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |
| `security`                                                                                            | [\Testing\petstore\Models\Operations\DeletePetSecurity](../../models/operations/DeletePetSecurity.md) | :heavy_check_mark:                                                                                    | The security requirements to use for the request.                                                     |


### Response

**[?\Testing\petstore\Models\Operations\DeletePetResponse](../../models/operations/DeletePetResponse.md)**


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
    $request->status = FindPetsByStatusStatus::Sold;

    $requestSecurity = new FindPetsByStatusSecurity();
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->findPetsByStatus($request, $requestSecurity);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Testing\petstore\Models\Operations\FindPetsByStatusRequest](../../models/operations/FindPetsByStatusRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Testing\petstore\Models\Operations\FindPetsByStatusSecurity](../../models/operations/FindPetsByStatusSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Testing\petstore\Models\Operations\FindPetsByStatusResponse](../../models/operations/FindPetsByStatusResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->findPetsByTags($request, $requestSecurity);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Testing\petstore\Models\Operations\FindPetsByTagsRequest](../../models/operations/FindPetsByTagsRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Testing\petstore\Models\Operations\FindPetsByTagsSecurity](../../models/operations/FindPetsByTagsSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Testing\petstore\Models\Operations\FindPetsByTagsResponse](../../models/operations/FindPetsByTagsResponse.md)**


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
    $requestSecurity->apiKey = '';

    $response = $sdk->pet->getPetById($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Testing\petstore\Models\Operations\GetPetByIdRequest](../../models/operations/GetPetByIdRequest.md)   | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\Testing\petstore\Models\Operations\GetPetByIdSecurity](../../models/operations/GetPetByIdSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\Testing\petstore\Models\Operations\GetPetByIdResponse](../../models/operations/GetPetByIdResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->updatePetWithForm($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Testing\petstore\Models\Operations\UpdatePetWithFormRequest](../../models/operations/UpdatePetWithFormRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Testing\petstore\Models\Operations\UpdatePetWithFormSecurity](../../models/operations/UpdatePetWithFormSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Testing\petstore\Models\Operations\UpdatePetWithFormResponse](../../models/operations/UpdatePetWithFormResponse.md)**


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
    $request->status = PetStatus::Pending;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new UpdatePetFormSecurity();
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->updatePetForm($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Testing\petstore\Models\Shared\Pet](../../models/shared/Pet.md)                                             | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Testing\petstore\Models\Operations\UpdatePetFormSecurity](../../models/operations/UpdatePetFormSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Testing\petstore\Models\Operations\UpdatePetFormResponse](../../models/operations/UpdatePetFormResponse.md)**


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
    $request->status = PetStatus::Available;
    $request->tags = [
        new Tag(),
        new Tag(),
        new Tag(),
    ];

    $requestSecurity = new UpdatePetJsonSecurity();
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->updatePetJson($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Testing\petstore\Models\Shared\Pet](../../models/shared/Pet.md)                                             | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Testing\petstore\Models\Operations\UpdatePetJsonSecurity](../../models/operations/UpdatePetJsonSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Testing\petstore\Models\Operations\UpdatePetJsonResponse](../../models/operations/UpdatePetJsonResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->updatePetRaw($request, $requestSecurity);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [string](../../models//.md)                                                                                 | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\Testing\petstore\Models\Operations\UpdatePetRawSecurity](../../models/operations/UpdatePetRawSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


### Response

**[?\Testing\petstore\Models\Operations\UpdatePetRawResponse](../../models/operations/UpdatePetRawResponse.md)**


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
    $requestSecurity->petstoreAuth = '';

    $response = $sdk->pet->uploadFile($request, $requestSecurity);

    if ($response->apiResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Testing\petstore\Models\Operations\UploadFileRequest](../../models/operations/UploadFileRequest.md)   | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\Testing\petstore\Models\Operations\UploadFileSecurity](../../models/operations/UploadFileSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\Testing\petstore\Models\Operations\UploadFileResponse](../../models/operations/UploadFileResponse.md)**


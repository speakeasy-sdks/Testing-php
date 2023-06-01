# testing/petstore

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/Testing-php.git"
        }
    ],
    "require": {
        "testing/petstore": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [pet](docs/pet/README.md)

* [addPetForm](docs/pet/README.md#addpetform) - Add a new pet to the store
* [addPetJson](docs/pet/README.md#addpetjson) - Add a new pet to the store
* [addPetRaw](docs/pet/README.md#addpetraw) - Add a new pet to the store
* [deletePet](docs/pet/README.md#deletepet) - Deletes a pet
* [findPetsByStatus](docs/pet/README.md#findpetsbystatus) - Finds Pets by status
* [findPetsByTags](docs/pet/README.md#findpetsbytags) - Finds Pets by tags
* [getPetById](docs/pet/README.md#getpetbyid) - Find pet by ID
* [updatePetWithForm](docs/pet/README.md#updatepetwithform) - Updates a pet in the store with form data
* [updatePetForm](docs/pet/README.md#updatepetform) - Update an existing pet
* [updatePetJson](docs/pet/README.md#updatepetjson) - Update an existing pet
* [updatePetRaw](docs/pet/README.md#updatepetraw) - Update an existing pet
* [uploadFile](docs/pet/README.md#uploadfile) - uploads an image

### [store](docs/store/README.md)

* [deleteOrder](docs/store/README.md#deleteorder) - Delete purchase order by ID
* [getInventory](docs/store/README.md#getinventory) - Returns pet inventories by status
* [getOrderById](docs/store/README.md#getorderbyid) - Find purchase order by ID
* [placeOrderForm](docs/store/README.md#placeorderform) - Place an order for a pet
* [placeOrderJson](docs/store/README.md#placeorderjson) - Place an order for a pet
* [placeOrderRaw](docs/store/README.md#placeorderraw) - Place an order for a pet

### [user](docs/user/README.md)

* [createUserForm](docs/user/README.md#createuserform) - Create user
* [createUserJson](docs/user/README.md#createuserjson) - Create user
* [createUserRaw](docs/user/README.md#createuserraw) - Create user
* [createUsersWithListInput](docs/user/README.md#createuserswithlistinput) - Creates list of users with given input array
* [deleteUser](docs/user/README.md#deleteuser) - Delete user
* [getUserByName](docs/user/README.md#getuserbyname) - Get user by user name
* [loginUser](docs/user/README.md#loginuser) - Logs user into the system
* [logoutUser](docs/user/README.md#logoutuser) - Logs out current logged in user session
* [updateUserForm](docs/user/README.md#updateuserform) - Update user
* [updateUserJson](docs/user/README.md#updateuserjson) - Update user
* [updateUserRaw](docs/user/README.md#updateuserraw) - Update user
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)

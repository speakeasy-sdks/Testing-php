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
    $request->status = PetStatus::Pending;
    $request->tags = [
        new Tag(),
        new Tag(),
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
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [pet](docs/sdks/pet/README.md)

* [addPetForm](docs/sdks/pet/README.md#addpetform) - Add a new pet to the store
* [addPetJson](docs/sdks/pet/README.md#addpetjson) - Add a new pet to the store
* [addPetRaw](docs/sdks/pet/README.md#addpetraw) - Add a new pet to the store
* [deletePet](docs/sdks/pet/README.md#deletepet) - Deletes a pet
* [findPetsByStatus](docs/sdks/pet/README.md#findpetsbystatus) - Finds Pets by status
* [findPetsByTags](docs/sdks/pet/README.md#findpetsbytags) - Finds Pets by tags
* [getPetById](docs/sdks/pet/README.md#getpetbyid) - Find pet by ID
* [updatePetWithForm](docs/sdks/pet/README.md#updatepetwithform) - Updates a pet in the store with form data
* [updatePetForm](docs/sdks/pet/README.md#updatepetform) - Update an existing pet
* [updatePetJson](docs/sdks/pet/README.md#updatepetjson) - Update an existing pet
* [updatePetRaw](docs/sdks/pet/README.md#updatepetraw) - Update an existing pet
* [uploadFile](docs/sdks/pet/README.md#uploadfile) - uploads an image

### [store](docs/sdks/store/README.md)

* [deleteOrder](docs/sdks/store/README.md#deleteorder) - Delete purchase order by ID
* [getInventory](docs/sdks/store/README.md#getinventory) - Returns pet inventories by status
* [getOrderById](docs/sdks/store/README.md#getorderbyid) - Find purchase order by ID
* [placeOrderForm](docs/sdks/store/README.md#placeorderform) - Place an order for a pet
* [placeOrderJson](docs/sdks/store/README.md#placeorderjson) - Place an order for a pet
* [placeOrderRaw](docs/sdks/store/README.md#placeorderraw) - Place an order for a pet

### [user](docs/sdks/user/README.md)

* [createUserForm](docs/sdks/user/README.md#createuserform) - Create user
* [createUserJson](docs/sdks/user/README.md#createuserjson) - Create user
* [createUserRaw](docs/sdks/user/README.md#createuserraw) - Create user
* [createUsersWithListInput](docs/sdks/user/README.md#createuserswithlistinput) - Creates list of users with given input array
* [deleteUser](docs/sdks/user/README.md#deleteuser) - Delete user
* [getUserByName](docs/sdks/user/README.md#getuserbyname) - Get user by user name
* [loginUser](docs/sdks/user/README.md#loginuser) - Logs user into the system
* [logoutUser](docs/sdks/user/README.md#logoutuser) - Logs out current logged in user session
* [updateUserForm](docs/sdks/user/README.md#updateuserform) - Update user
* [updateUserJson](docs/sdks/user/README.md#updateuserjson) - Update user
* [updateUserRaw](docs/sdks/user/README.md#updateuserraw) - Update user
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)

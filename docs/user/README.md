# user

## Overview

Operations about user

### Available Operations

* [createUserForm](#createuserform) - Create user
* [createUserJson](#createuserjson) - Create user
* [createUserRaw](#createuserraw) - Create user
* [createUsersWithListInput](#createuserswithlistinput) - Creates list of users with given input array
* [deleteUser](#deleteuser) - Delete user
* [getUserByName](#getuserbyname) - Get user by user name
* [loginUser](#loginuser) - Logs user into the system
* [logoutUser](#logoutuser) - Logs out current logged in user session
* [updateUserForm](#updateuserform) - Update user
* [updateUserJson](#updateuserjson) - Update user
* [updateUserRaw](#updateuserraw) - Update user

## createUserForm

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\User;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new User();
    $request->email = 'john@email.com';
    $request->firstName = 'John';
    $request->id = 10;
    $request->lastName = 'James';
    $request->password = '12345';
    $request->phone = '12345';
    $request->userStatus = 1;
    $request->username = 'theUser';

    $response = $sdk->user->createUserForm($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createUserJson

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\User;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new User();
    $request->email = 'john@email.com';
    $request->firstName = 'John';
    $request->id = 10;
    $request->lastName = 'James';
    $request->password = '12345';
    $request->phone = '12345';
    $request->userStatus = 1;
    $request->username = 'theUser';

    $response = $sdk->user->createUserJson($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createUserRaw

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;

$sdk = Petstore::builder()
    ->build();

try {
'qui'

    $response = $sdk->user->createUserRaw($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createUsersWithListInput

Creates list of users with given input array

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\User;

$sdk = Petstore::builder()
    ->build();

try {
    $request = [
        new User(),
        new User(),
        new User(),
        new User(),
    ]

    $response = $sdk->user->createUsersWithListInput($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## deleteUser

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\DeleteUserRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new DeleteUserRequest();
    $request->username = 'Myra56';

    $response = $sdk->user->deleteUser($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getUserByName

Get user by user name

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\GetUserByNameRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new GetUserByNameRequest();
    $request->username = 'Brianne61';

    $response = $sdk->user->getUserByName($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## loginUser

Logs user into the system

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\LoginUserRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new LoginUserRequest();
    $request->password = 'sed';
    $request->username = 'Leora.Fadel';

    $response = $sdk->user->loginUser($request);

    if ($response->loginUser200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## logoutUser

Logs out current logged in user session

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;

$sdk = Petstore::builder()
    ->build();

try {
    $response = $sdk->user->logoutUser();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updateUserForm

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UpdateUserFormRequest;
use \Testing\petstore\Models\Shared\User;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new UpdateUserFormRequest();
    $request->user = new User();
    $request->user->email = 'john@email.com';
    $request->user->firstName = 'John';
    $request->user->id = 10;
    $request->user->lastName = 'James';
    $request->user->password = '12345';
    $request->user->phone = '12345';
    $request->user->userStatus = 1;
    $request->user->username = 'theUser';
    $request->username = 'Tyra.Turcotte35';

    $response = $sdk->user->updateUserForm($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updateUserJson

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UpdateUserJsonRequest;
use \Testing\petstore\Models\Shared\User;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new UpdateUserJsonRequest();
    $request->user = new User();
    $request->user->email = 'john@email.com';
    $request->user->firstName = 'John';
    $request->user->id = 10;
    $request->user->lastName = 'James';
    $request->user->password = '12345';
    $request->user->phone = '12345';
    $request->user->userStatus = 1;
    $request->user->username = 'theUser';
    $request->username = 'Leslie_Kertzmann9';

    $response = $sdk->user->updateUserJson($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## updateUserRaw

This can only be done by the logged in user.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\UpdateUserRawRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new UpdateUserRawRequest();
    $request->requestBody = 'ipsa';
    $request->username = 'Waino_Orn';

    $response = $sdk->user->updateUserRaw($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

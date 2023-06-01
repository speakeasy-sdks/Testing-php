# store

## Overview

Access to Petstore orders

Find out more about our store
<http://swagger.io>
### Available Operations

* [deleteOrder](#deleteorder) - Delete purchase order by ID
* [getInventory](#getinventory) - Returns pet inventories by status
* [getOrderById](#getorderbyid) - Find purchase order by ID
* [placeOrderForm](#placeorderform) - Place an order for a pet
* [placeOrderJson](#placeorderjson) - Place an order for a pet
* [placeOrderRaw](#placeorderraw) - Place an order for a pet

## deleteOrder

For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\DeleteOrderRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new DeleteOrderRequest();
    $request->orderId = 944669;

    $response = $sdk->store->deleteOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getInventory

Returns a map of status codes to quantities

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\GetInventorySecurity;

$sdk = Petstore::builder()
    ->build();

try {
    $requestSecurity = new GetInventorySecurity();
    $requestSecurity->apiKey = 'YOUR_API_KEY_HERE';

    $response = $sdk->store->getInventory($requestSecurity);

    if ($response->getInventory200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## getOrderById

For valid response try integer IDs with value <= 5 or > 10. Other values will generate exceptions.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Operations\GetOrderByIdRequest;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new GetOrderByIdRequest();
    $request->orderId = 758616;

    $response = $sdk->store->getOrderById($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## placeOrderForm

Place a new order in the store

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Order;
use \Testing\petstore\Models\Shared\OrderStatus;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new Order();
    $request->complete = false;
    $request->id = 10;
    $request->petId = 198772;
    $request->quantity = 7;
    $request->shipDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-15T16:29:54.554Z');
    $request->status = OrderStatus::APPROVED;

    $response = $sdk->store->placeOrderForm($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## placeOrderJson

Place a new order in the store

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;
use \Testing\petstore\Models\Shared\Order;
use \Testing\petstore\Models\Shared\OrderStatus;

$sdk = Petstore::builder()
    ->build();

try {
    $request = new Order();
    $request->complete = false;
    $request->id = 10;
    $request->petId = 198772;
    $request->quantity = 7;
    $request->shipDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-12T03:15:36.542Z');
    $request->status = OrderStatus::APPROVED;

    $response = $sdk->store->placeOrderJson($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## placeOrderRaw

Place a new order in the store

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Testing\petstore\Petstore;

$sdk = Petstore::builder()
    ->build();

try {
'modi'

    $response = $sdk->store->placeOrderRaw($request);

    if ($response->order !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

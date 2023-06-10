# Pet

Create a new pet in the store


## Fields

| Field                                          | Type                                           | Required                                       | Description                                    | Example                                        |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `category`                                     | [?Category](../../models/shared/Category.md)   | :heavy_minus_sign:                             | N/A                                            |                                                |
| `id`                                           | *?int*                                         | :heavy_minus_sign:                             | N/A                                            | 10                                             |
| `name`                                         | *string*                                       | :heavy_check_mark:                             | N/A                                            | doggie                                         |
| `photoUrls`                                    | array<*string*>                                | :heavy_check_mark:                             | N/A                                            |                                                |
| `status`                                       | [?PetStatus](../../models/shared/PetStatus.md) | :heavy_minus_sign:                             | pet status in the store                        |                                                |
| `tags`                                         | array<[Tag](../../models/shared/Tag.md)>       | :heavy_minus_sign:                             | N/A                                            |                                                |
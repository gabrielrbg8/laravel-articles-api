---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.

<!-- END_INFO -->

#Article


APIs for managing articles
<!-- START_0d4cb2104f73e3ee9cf74a52a015de76 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles?title=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles"
);

let params = {
    "title": "qui",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 0,
            "original_id": 3503,
            "title": "Mr.",
            "url": "http:\/\/howe.org\/quam-aut-labore-commodi-veniam-ut",
            "image_url": "http:\/\/koss.com\/quia-doloremque-optio-vero-id-sed.html",
            "news_site": "Schuster, Hayes and Mante",
            "featured": 0,
            "summary": "Culpa sit tenetur ea. Sed voluptates cupiditate dolores neque. Explicabo et commodi reiciendis ipsam voluptatibus quae.",
            "launches": null,
            "events": null
        },
        {
            "id": 0,
            "original_id": 5549,
            "title": "Mrs.",
            "url": "http:\/\/fadel.info\/ex-mollitia-est-possimus-quos-qui-id-ipsam-ea",
            "image_url": "http:\/\/www.thompson.net\/",
            "news_site": "Mosciski-Gutkowski",
            "featured": 0,
            "summary": "Aliquid voluptatem vero tempore cum molestiae quia voluptatibus. Dolorum et aut nesciunt id accusamus. Velit et hic asperiores atque tempora modi ducimus. Dignissimos omnis magni impedit omnis.",
            "launches": null,
            "events": null
        }
    ]
}
```

### HTTP Request
`GET api/articles`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `title` |  optional  | string The title of the article.

<!-- END_0d4cb2104f73e3ee9cf74a52a015de76 -->

<!-- START_b9cfac88a54b626b9825ddcc2134f118 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"original_id":3,"title":"debitis","url":"neque","image_url":"dolorem","news_site":"iure","summary":"id"}'

```

```javascript
const url = new URL(
    "http://localhost/api/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "original_id": 3,
    "title": "debitis",
    "url": "neque",
    "image_url": "dolorem",
    "news_site": "iure",
    "summary": "id"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 0,
        "original_id": 5757,
        "title": "Dr.",
        "url": "http:\/\/ruecker.com\/",
        "image_url": "http:\/\/www.anderson.com\/vel-quam-a-qui",
        "news_site": "Schneider-Runolfsdottir",
        "featured": 0,
        "summary": "Ex dolores blanditiis sunt earum explicabo in. Similique eum velit ut nisi laboriosam ducimus praesentium voluptatum. Hic quia totam omnis architecto. Itaque ut vel odit voluptatem.",
        "launches": null,
        "events": null
    }
}
```

### HTTP Request
`POST api/articles`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `original_id` | integer |  required  | The original id (from the Space Flight News) of the article
        `title` | string |  required  | The title of the article
        `url` | string |  required  | The url of the article
        `image_url` | string |  required  | The image_url of the article
        `news_site` | string |  required  | The news_site of the article
        `summary` | string |  required  | The summary of the article
    
<!-- END_b9cfac88a54b626b9825ddcc2134f118 -->

<!-- START_a98fdf52c7db91e78049d31130bbb5f1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 0,
        "original_id": 6770,
        "title": "Mr.",
        "url": "http:\/\/www.kunze.com\/voluptatem-doloribus-et-hic-et",
        "image_url": "http:\/\/www.lind.com\/sequi-pariatur-non-odio-ad.html",
        "news_site": "Greenholt Inc",
        "featured": 0,
        "summary": "Sed quis et fugiat ipsum. Error recusandae in quis mollitia rerum. Ullam vel a dolore praesentium neque. Autem porro deserunt sint repellendus quibusdam quaerat suscipit odit.",
        "launches": null,
        "events": null
    }
}
```

### HTTP Request
`GET api/articles/{article}`


<!-- END_a98fdf52c7db91e78049d31130bbb5f1 -->

<!-- START_725b7ccde91c84ae0ac1703955fcd806 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"original_id":4,"title":"fugiat","url":"nihil","image_url":"iure","news_site":"libero","summary":"pariatur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "original_id": 4,
    "title": "fugiat",
    "url": "nihil",
    "image_url": "iure",
    "news_site": "libero",
    "summary": "pariatur"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 0,
        "original_id": 6916,
        "title": "Dr.",
        "url": "http:\/\/www.zieme.com\/autem-nesciunt-ut-inventore-blanditiis-dolores.html",
        "image_url": "http:\/\/ullrich.com\/ut-aliquid-tempore-autem-architecto-unde-sit",
        "news_site": "Koelpin Inc",
        "featured": 0,
        "summary": "Aperiam tenetur esse enim qui et nisi vel. Et et ratione ut consequatur. Nostrum et autem voluptas quod expedita. Quia et fuga nam numquam quos. Inventore enim quis veritatis sed.",
        "launches": null,
        "events": null
    }
}
```

### HTTP Request
`PUT api/articles/{article}`

`PATCH api/articles/{article}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `original_id` | integer |  optional  | optional The original id (from the Space Flight News) of the article
        `title` | string |  optional  | optional The title of the article
        `url` | string |  optional  | optional The url of the article
        `image_url` | string |  optional  | optional The image_url of the article
        `news_site` | string |  optional  | optional The news_site of the article
        `summary` | string |  optional  | optional The summary of the article
    
<!-- END_725b7ccde91c84ae0ac1703955fcd806 -->

<!-- START_8a228d26f297a77c77c901dc23a49e51 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "message": "success"
}
```

### HTTP Request
`DELETE api/articles/{article}`


<!-- END_8a228d26f297a77c77c901dc23a49e51 -->

#Auth


APIs for managing Authentication
<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Login. Get a JWT via given credentials.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"velit","password":"quia"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "velit",
    "password": "quia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Rogers Crona",
        "username": "shaina71",
        "email": "madaline.mayert@hotmail.com",
        "birth_date": "madaline.mayert@hotmail.com"
    }
}
```

### HTTP Request
`POST api/auth/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | 
        `password` | string |  required  | 
    
<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## Log the user out (Invalidate the token).

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## Refresh a token.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## Get the authenticated User.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Jessy Anderson",
        "username": "emard.enoch",
        "email": "edaniel@stokes.com",
        "birth_date": "edaniel@stokes.com"
    }
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_9357c0a600c785fe4f708897facae8b8 -->
## Register a User.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","email":"et","password":"error"}'

```

```javascript
const url = new URL(
    "http://localhost/api/auth/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "email": "et",
    "password": "error"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Wade Farrell",
        "username": "kirlin.zack",
        "email": "carley.gibson@gmail.com",
        "birth_date": "carley.gibson@gmail.com"
    }
}
```

### HTTP Request
`POST api/auth/signup`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
        `email` | string |  required  | 
        `password` | string |  required  | 
    
<!-- END_9357c0a600c785fe4f708897facae8b8 -->

#Users


APIs for managing users
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users?name=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let params = {
    "name": "autem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "name": "Alverta Bergnaum",
            "username": "hirthe.edwina",
            "email": "bernadette.konopelski@renner.net",
            "birth_date": "bernadette.konopelski@renner.net"
        },
        {
            "name": "Charlie Walker",
            "username": "sanford.derrick",
            "email": "laurianne42@windler.com",
            "birth_date": "laurianne42@windler.com"
        }
    ]
}
```

### HTTP Request
`GET api/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  optional  | string The name of the user.

<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "name": "Mr. Nolan Romaguera",
        "username": "jessica.zemlak",
        "email": "cristopher94@crooks.com",
        "birth_date": "cristopher94@crooks.com"
    }
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"provident"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "provident"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `password` | string |  optional  | optional The password of the user.
    
<!-- END_48a3115be98493a3c866eb0e23347262 -->



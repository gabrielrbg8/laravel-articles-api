<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.</p>
<!-- END_INFO -->
<h1>Article</h1>
<p>APIs for managing articles</p>
<!-- START_0d4cb2104f73e3ee9cf74a52a015de76 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/articles?title=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/articles"
);

let params = {
    "title": "qui",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/articles</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>optional</td>
<td>string The title of the article.</td>
</tr>
</tbody>
</table>
<!-- END_0d4cb2104f73e3ee9cf74a52a015de76 -->
<!-- START_b9cfac88a54b626b9825ddcc2134f118 -->
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"original_id":3,"title":"debitis","url":"neque","image_url":"dolorem","news_site":"iure","summary":"id"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/articles</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>original_id</code></td>
<td>integer</td>
<td>required</td>
<td>The original id (from the Space Flight News) of the article</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
<td>The title of the article</td>
</tr>
<tr>
<td><code>url</code></td>
<td>string</td>
<td>required</td>
<td>The url of the article</td>
</tr>
<tr>
<td><code>image_url</code></td>
<td>string</td>
<td>required</td>
<td>The image_url of the article</td>
</tr>
<tr>
<td><code>news_site</code></td>
<td>string</td>
<td>required</td>
<td>The news_site of the article</td>
</tr>
<tr>
<td><code>summary</code></td>
<td>string</td>
<td>required</td>
<td>The summary of the article</td>
</tr>
</tbody>
</table>
<!-- END_b9cfac88a54b626b9825ddcc2134f118 -->
<!-- START_a98fdf52c7db91e78049d31130bbb5f1 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/articles/{article}</code></p>
<!-- END_a98fdf52c7db91e78049d31130bbb5f1 -->
<!-- START_725b7ccde91c84ae0ac1703955fcd806 -->
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"original_id":4,"title":"fugiat","url":"nihil","image_url":"iure","news_site":"libero","summary":"pariatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/articles/{article}</code></p>
<p><code>PATCH api/articles/{article}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>original_id</code></td>
<td>integer</td>
<td>optional</td>
<td>optional The original id (from the Space Flight News) of the article</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>optional</td>
<td>optional The title of the article</td>
</tr>
<tr>
<td><code>url</code></td>
<td>string</td>
<td>optional</td>
<td>optional The url of the article</td>
</tr>
<tr>
<td><code>image_url</code></td>
<td>string</td>
<td>optional</td>
<td>optional The image_url of the article</td>
</tr>
<tr>
<td><code>news_site</code></td>
<td>string</td>
<td>optional</td>
<td>optional The news_site of the article</td>
</tr>
<tr>
<td><code>summary</code></td>
<td>string</td>
<td>optional</td>
<td>optional The summary of the article</td>
</tr>
</tbody>
</table>
<!-- END_725b7ccde91c84ae0ac1703955fcd806 -->
<!-- START_8a228d26f297a77c77c901dc23a49e51 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "success"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/articles/{article}</code></p>
<!-- END_8a228d26f297a77c77c901dc23a49e51 -->
<h1>Auth</h1>
<p>APIs for managing Authentication</p>
<!-- START_a925a8d22b3615f12fca79456d286859 -->
<h2>Login. Get a JWT via given credentials.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"velit","password":"quia"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Rogers Crona",
        "username": "shaina71",
        "email": "madaline.mayert@hotmail.com",
        "birth_date": "madaline.mayert@hotmail.com"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/login</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_a925a8d22b3615f12fca79456d286859 -->
<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<h2>Log the user out (Invalidate the token).</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/logout</code></p>
<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
<h2>Refresh a token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/refresh</code></p>
<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->
<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
<h2>Get the authenticated User.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Jessy Anderson",
        "username": "emard.enoch",
        "email": "edaniel@stokes.com",
        "birth_date": "edaniel@stokes.com"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/me</code></p>
<!-- END_a47210337df3b4ba0df697c115ba0c1e -->
<!-- START_9357c0a600c785fe4f708897facae8b8 -->
<h2>Register a User.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/auth/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","email":"et","password":"error"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Wade Farrell",
        "username": "kirlin.zack",
        "email": "carley.gibson@gmail.com",
        "birth_date": "carley.gibson@gmail.com"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/signup</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_9357c0a600c785fe4f708897facae8b8 -->
<h1>Users</h1>
<p>APIs for managing users</p>
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/users?name=autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

let params = {
    "name": "autem",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>string The name of the user.</td>
</tr>
</tbody>
</table>
<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->
<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "name": "Mr. Nolan Romaguera",
        "username": "jessica.zemlak",
        "email": "cristopher94@crooks.com",
        "birth_date": "cristopher94@crooks.com"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users/{user}</code></p>
<!-- END_8653614346cb0e3d444d164579a0a0a2 -->
<!-- START_48a3115be98493a3c866eb0e23347262 -->
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"provident"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/users/{user}</code></p>
<p><code>PATCH api/users/{user}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>optional</td>
<td>optional The password of the user.</td>
</tr>
</tbody>
</table>
<!-- END_48a3115be98493a3c866eb0e23347262 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>
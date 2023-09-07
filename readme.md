# PSR-7

Defines a standard interface for HTTP messages.

PSR-7 enables us to build middleware.

## Interfaces (7)

* MessageInterface
* RequestInterface
* ResponseInterface
* ServerRequestInterface
* StreamInterface
* UploadedFileInterface
* UriInterface

### MessageInterface

```text
    Defines common interface for HTTP request and responses
```

### RequestInterface

```text
    Defines common interface for HTTP client-side request
```

### ResponseInterface

```text
    Defines common interface for HTTP server-side responses
```

### ServerRequestInterface

```text
    Defines common interface for HTTP servier-side request
```

### StreamInterface

```text
    Defines common interface for PHP data streams
```

### UploadedFileInterface

```text
    Defines common interface for files uploaded and received as
        part of an HTTP request
```

### UriInterface

```text
    Defines common interface for URIs
```

## Middleware

Code that interacts with a request or response
    without needing to spin up the entire application first.

### Layers

Not all layer will engage on every request and response

```txt
               App
               Routes
Request -----> Authorization
Response <---- Exceptions
               CORS

```

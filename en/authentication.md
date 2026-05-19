#  - CMS ACCESS Model API v0.9.8

## 

### Authentication Process for ACCESS APIs

This section describes the authentication and authorization process required to access all ACCESS Model API endpoints.

#### Overview

The ACCESS APIs use OAuth 2.0 for authentication and authorization. All ACCESS participants must complete a registration process and obtain appropriate credentials before accessing any API.

#### OAuth 2.0 Client Credentials Flow

The ACCESS APIs use the OAuth 2.0 Client Credentials grant type, which is appropriate for server-to-server authentication where the client (ACCESS participant system) is acting on its own behalf.

##### Authentication Flow

```
sequenceDiagram
    participant Client as ACCESS Participant System
    participant AuthServer as CMS Authorization Server
    participant API as ACCESS API

    Client->>AuthServer: POST {URL received during registration}<br/>grant_type=client_credentials<br/>client_id={received during registration}<br/>client_secret={received during registration}<br/>scope={received during registration}
    AuthServer->>AuthServer: Validate credentials
    AuthServer-->>Client: 200 OK<br/>access_token, expires_in
    
    Client->>API: POST /access/Patient/$operation<br/>Authorization: Bearer {access_token}
    API->>API: Validate token
    API-->>Client: 202 Accepted<br/>Response with submission ID

```

##### Step 1: Obtain Access Token

**Token Endpoint**: `POST {URL received during registration}`

**Request Headers**:

```
Content-Type: application/x-www-form-urlencoded

```

**Request Body** (form-encoded):

```
grant_type=client_credentials
client_id={received during registration}
client_secret={received during registration}
scope={received during registration}

```

**Example cURL Request**:

```
curl -X POST {URL received during registration} \
  -H "Content-Type: application/x-www-form-urlencoded" \
  -d "grant_type=client_credentials" \
  -d "client_id={received during registration}" \
  -d "client_secret={received during registration}" \
  -d "scope={received during registration}"

```

**Successful Response**:

```
{
  "access_token": "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9...",
  "token_type": "Bearer",
  "expires_in": 300,
  "scope": "{allowed scope}"
}

```

It is **strongly** recommended to get a new access token for each new request.

##### Step 2: Use Access Token in API Requests

Include the access token in the Authorization header of all API requests:

**Request Headers**:

```
Authorization: Bearer {access_token}
Content-Type: application/fhir+json

```

**Example Request**:

```
POST https://[base]/access/Patient/$check-eligibility?entityId=[participantID]
Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9...
Content-Type: application/fhir+json

{
  "resourceType": "Parameters",
  "parameter": [...]
}

```

#### Token Management

##### Token Expiration

Access tokens have a limited lifetime (typically 5 minutes). Clients must:

1. **Monitor token expiration**- Track the`expires_in`value from the token response
1. **Refresh before expiration**- Request a new token before the current one expires
1. **Handle `HTTP 401` responses**- If a token expires mid-use, obtain a new token and retry the request

##### Token Caching Best Practices

* Cache tokens to avoid unnecessary authentication requests
* Request a new token for each request
* Implement thread-safe token management in multi-threaded applications
* Store credentials and tokens securely (never in source code or logs)

##### Example Token Management (Pseudocode)

```
class TokenManager:
    token = null
    expires_at = null
    
    function getValidToken():
        if token is null or currentTime() >= expires_at - 5 minutes:
            response = requestNewToken()
            token = response.access_token
            expires_at = currentTime() + response.expires_in
        return token
    
    function requestNewToken():
        return POST to auth_server with client_credentials

```

#### Required Scopes

The ACCESS APIs require the OAuth 2.0 scopes provided during the client registration process. Scopes may vary based on which APIs your organization has been approved to access.

#### Error Handling

##### Authentication Errors

**Invalid Credentials (401 Unauthorized)**:

```
{
  "error": "invalid_client",
  "error_description": "Client authentication failed"
}

```

**Action**: Verify your `client_id` and `client_secret` are correct.

**Invalid Token (401 Unauthorized)**:

```
HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer error="invalid_token", error_description="Token has expired"

```

**Action**: Request a new access token.

**Insufficient Scope (403 Forbidden)**:

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "forbidden",
      "details": {
        "text": "Insufficient scope for requested operation"
      }
    }
  ]
}

```

**Action**: Ensure your token includes all required scopes for the API operation you are attempting to access.

#### Security Requirements

##### Transport Security

* **TLS 1.3 Required**: All communication must use TLS 1.3
* **Certificate Validation**: Clients must validate server certificates
* **No Insecure Protocols**: HTTP, TLS 1.0, TLS 1.1, TLS 1.2, and SSL are not permitted

##### Credential Security

* **Secure Storage**: Store client credentials in secure key management systems or vaults
* **No Code Storage**: Never store credentials in source code, configuration files, or version control
* **Environment Variables**: Use environment variables or secure configuration management
* **Rotation**: Implement credential rotation policies (recommended: every 90 days)
* **Audit Logging**: Log all authentication attempts (excluding sensitive credential data)

##### Token Security

* **Secure Transmission**: Only transmit tokens over TLS connections
* **Limited Lifetime**: Accept token expiration and request new tokens as needed
* **No Sharing**: Never share tokens between different applications or environments
* **Secure Storage**: If caching tokens, use encrypted storage
* **Logging**: Never log tokens in application logs or monitoring systems

#### Multi-API Access

A single set of credentials may provide access to multiple ACCESS APIs. The OAuth scopes in your access token will determine which operations you can perform.

#### Troubleshooting

##### Common Issues

**Token Repeatedly Expires Mid-Request**

* Check system clock synchronization
* Implement proactive token refresh (5 minutes before expiration)
* Verify network latency is not causing delays

**Authentication Works in Test but Fails in Production**

* Verify you are using production credentials (not test credentials)
* Check that production endpoint URLs are correct
* Confirm your organization has been approved for production access

**`HTTP 403 Forbidden` Despite Valid Token**

* Verify your scope includes the operation you are attempting
* Check that your participant ID is active
* Ensure you are using the correct API endpoints

#### Additional Resources

* [OAuth 2.0 RFC 6749](https://tools.ietf.org/html/rfc6749) - OAuth 2.0 specification
* [OAuth 2.0 Client Credentials](https://tools.ietf.org/html/rfc6749#section-4.4) - Client credentials grant flow
* [JWT RFC 7519](https://tools.ietf.org/html/rfc7519) - JSON Web Token specification
* [OAuth 2.0 Security Best Practices](https://datatracker.ietf.org/doc/html/draft-ietf-oauth-security-topics) - Security considerations


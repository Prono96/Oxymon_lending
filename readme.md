### End Points Route

| METHOD        | ENDPOINT          | 
| ------------- |:-------------:| 
| POST          | http://127.0.0.1:8000/api/auth/register | 
| POST     | http://127.0.0.1:8000/api/auth/login      |  
| GET | http://127.0.0.1:8000/api/auth/user-profile     |  
| POST | http://127.0.0.1:8000/api/auth/refresh      |  
| POST | http://127.0.0.1:8000/api/auth/logout      |  
| POST | http://127.0.0.1:8000/api/auth/user-loan      | 


### Sample request to register a user 
#### POST: /api/auth/register

```
{
    "name": "John Doe",
    "email": "johndoe@example.com",
    "password": "password",
    "password_confirmation": "password"
}
```

### Sample request to login a user 
#### POST: /api/auth/login

```
{
    "email": "johndoe@example.com",
    "password": "password",
}
```

### Sample request to borrow money
#### POST: /api/auth/user-loan

```
{
  "name": "John Doe",
  "email": "johndoe@example.com",
  "phone_number": "1234567890",
  "address": "123 Main Street",
  "salary": "50000",
  "amount_to_borrow": "10000",
  "duration": "12"
}

```

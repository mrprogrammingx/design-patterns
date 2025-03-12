# Laravel Observer and Factory Design Pattern

## Introduction
This guide demonstrates how to implement the **Observer** and **Factory** design patterns in Laravel.

- **Observer Pattern**: Used to listen for model events and execute specific actions when an event occurs.
- **Factory Pattern**: Used to create object instances in a centralized way, making the code more flexible and maintainable.

## Installation & Setup
Ensure your Laravel project is set up. If not, create a new Laravel project:

## Implementing the Observer Pattern
The Observer pattern allows us to automatically trigger actions when a model event occurs in this case `User` model

### Step 1: Create a Model and Migration
Run the following command to generate a `User` model with a migration:

Run migrations:

```sh
php artisan migrate
```

### Observer located at: 
`app/Observers/UserObserver.php`.

### The route for testing the observer:
```
http://127.0.0.1:8000/observer
```

## Implementing the Factory Pattern
The Factory pattern is useful for creating instances of a class while keeping the creation logic centralized.

#### PayPal Gateway

#### Stripe Gateway

### The route for testing the factory:

```sh
    http://127.0.0.1:8000/pay?payType=paypal"
```

## Conclusion
By implementing the **Observer** pattern, we automated User model event handling in Laravel. The **Factory** pattern allowed us to create flexible, scalable object instantiations. Together, these patterns improve Laravel application architecture by making code modular and maintainable.

Happy coding! 🚀


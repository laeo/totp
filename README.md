# Time-based One-time Password

```php
$gate = new TOTP\TOTP('ntdxil');
$code = $gate->getCode();
var_dump($gate->auth($code));
```

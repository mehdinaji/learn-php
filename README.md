# ADD ROUTE

## WelcomeController.php
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return "Hello, welcome to my Laravel app!";
    }
}
```
## web.php
```
use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);
```

# Code Citations

## License: GPL_2_0
https://github.com/khaivngo/QuickEval/tree/dab30b5c995b76b5fac8c1029c946ae8c4ceba63/app/Http/Controllers/AuthController.php

```
request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string
```


## License: unknown
https://github.com/jadsalhani/aub-ionic-workshop-api/tree/989a4bd348e95c2695f6dde73fc02727d89cbb52/app/Http/Controllers/API/AuthController.php

```
min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
```


## License: unknown
https://github.com/adwiarifin/kesatriablog/tree/f2fda3ef1ba0374bb3d347af39c74ec8bfd406ba/app/Http/Controllers/RegistrationController.php

```
=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user
```


## License: unknown
https://github.com/shakyl333/Laravel-5.5-Angular-4-demo/tree/15343053cc67d32774c5269d00644a71ed477e7b/laravel-api/app/Http/Controllers/ApiController.php

```
$request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|
```


## License: unknown
https://github.com/mushzak/keep-Laravel-VueJs/tree/d82b5e966b0f2c530d4491238727f2eb2ad9e066/app/Http/Controllers/StoreMemberController.php

```
>validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed
```


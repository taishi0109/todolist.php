protected $redirectTo = '/';

protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ], [], [
        'name' => 'ユーザー名',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
    ]);
}

public function __construct()
{
    $this->middleware('guest');
}
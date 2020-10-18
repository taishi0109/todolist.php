protected $redirectTo = '/';

public function __construct()
{
    $this->middleware('guest')->except('logout');
}
<?php
namespace App\Models;

class User{


    protected ?int $id = null;
    protected ?string $fullname = null;
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?array $role = null;

    public function __construct(
        ?int $id = null,
        ?string $fullname = null,
        ?string $email = null,
        ?string $password = null,
        ?array $role = null
    ) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function test(){
        echo "omae wa mou shindeiru";
    }
}















?>

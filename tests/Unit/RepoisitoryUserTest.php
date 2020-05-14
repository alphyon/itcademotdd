<?php

namespace Tests\Unit;


use App\Http\Controllers\RepositoryUser;
use App\User;
use Tests\TestCase;

class RepoisitoryUserTest extends TestCase
{
    public function testCreateUser()
    {
        //Arrange
        $repo = new RepositoryUser(new User());
        $data = [
            'name' => $this->fakerData()->name,
            'email' => $this->fakerData()->email,
            'password' => $this->fakerData()->password
        ];
        //Action
        $user = $repo->create($data);

        //Assert
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);

    }

    public function testListUser()
    {
        $dataTest = factory(User::class, 10)->create();
        $repo = new RepositoryUser(new User());

        $users = $repo->all();

        $this->assertGreaterThanOrEqual($dataTest->count(), $users->count());


    }
}

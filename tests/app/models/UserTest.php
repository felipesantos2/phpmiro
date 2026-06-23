<?php

declare(strict_types=1);

namespace tests\app\models;

use app\entities\UserEntity;
use app\models\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function test_can_create_instance(): void
    {
        $this->assertInstanceOf(User::class, new User());
    }

    public function test_count_users(): void
    {
        $count = (new User())->count();

        $this->assertIsNumeric($count);
        $this->assertEquals(5, $count);
    }

    public function test_all_users_are_returned(): void
    {
        $all = (new User())->all();
        $count = (new User())->count();

        $this->assertIsArray($all);
        $this->assertEquals($count, count($all));
    }

    // public function test_can_create_user(): void {
    //     $user = new User();
    //     $created = 0;

    //     $created = $user->create([
    //         'name' => 'Jon Doe',
    //         'status' => 1,
    //         'email' => 'tonytony@chopper.com',
    //         'password' => 'doctorhimecherry',
    //     ]);

    //     $this->assertEquals(0, $created);
    // }

    // public function test_find_return_an_user(): void {}

    public function test_user_are_updated(): void
    {
        $oldUser = (new User())->first();

        /** @var UserEntity $oldData */
        $user = (new User())->update($oldUser, [
            'name' => 'Felipe',
        ]);

        $this->assertIsArray($user);
        $this->assertEquals([], $user);
    }
}

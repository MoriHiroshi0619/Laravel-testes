<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /** @test */
    public function check_if_user_columns_is_correct(): void
    {
        $user = new User;

        $expected = [
          'name',
          'email',
          'password'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

//        dd($arrayCompared);

        $this->assertEquals(0, count($arrayCompared));
    }
}

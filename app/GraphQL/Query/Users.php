<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\User;

class Users extends Query {

    protected $attributes = [
        'name' => 'users'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function args()
    {
        return [
            'id'    => ['name' => 'id',      'type' => Type::string()],
            'name'  => ['name' => 'usuario', 'type' => Type::string()],
            'email' => ['name' => 'nombre',  'type' => Type::string()]
        ];
    }

    public function resolve($root, $args)
    {
        if(isset($args['id'])) {
            return User::where('id' , $args['id'])->get();
        }
        else {
            return User::all();
        }
    }

}
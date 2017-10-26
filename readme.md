<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel y GraphQL

Este proyecto tiene integrado el paquete de "folklore/graphql": "~1.0.0" además de 2 ejemplos para empezar a utilizarlo de forma práctica y sencilla.

- lara-graphql.dev/graphql?query=query+FetchUsers{users{id,name,email}}
- lara-graphql.dev/graphql?query=mutation+users{updateUserPassword(id: "1", password: "newpassword"){id,email}}

## ¿Cómo empezar?

Este proyecto solo pretende incentivar de laravel con reactJS y GraphQL. Si eres muy nuevo en laravel te daré una guía de como empezar.


- Levanta el proyecto en tu ambiente de desarrollo, ya tiene incluido el paquete en (composer.json).
- Configura tu (.env) con la base de datos.
- Ejecuta tus migraciones utilizando artisan (php artisan migrate).
- Ejecuta los seeders, estos te permitiran insertar datos en tu tabla. (php artisan db:seed)
- Finalmente con tu postman en verbo POST pruebas las rutas que inicialmente escribi.

Empieza a examinar el código desde: App/GraphQL.
## Lecturas para profundizar

Si estas empezando con laravel y graphQL te recomiendo los siguientes sitios.
- [Laravel](https://laravel.com)
- [GraphQL](http://facebook.github.io/graphql)
- [Folkloreatelier](https://github.com/Folkloreatelier/laravel-graphql)
- [GrapiQL](https://github.com/graphql/graphiql)

## Sociales

Puedes seguirme en mis redes:
{fb, tw, instagram}: @juangonzaq

únete a nuestro grupo de Laravel en español:
[Laravel Perú](https://www.facebook.com/groups/perularavel/)

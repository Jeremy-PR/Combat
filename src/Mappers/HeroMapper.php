
<?php


class HeroMapper implements MapperContract {
        public static function mapToObject(array $loginData):Hero
        {
            return new Hero(
                $loginData['id'],
                $loginData['name'],
                $loginData['life'],
            );
        }
}
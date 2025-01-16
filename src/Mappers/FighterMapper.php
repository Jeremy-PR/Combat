<?php

final class FighterMapper implements MapperContract
{
    public static function mapToObject(array $fighterData): Fighter
    {
        return new Fighter(
            $fighterData['id'],
            $fighterData['fightername'],
            $fighterData['image']
        );
    }
}
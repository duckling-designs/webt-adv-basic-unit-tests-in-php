<?php

namespace DucklingDesigns\WebtAdvBasicUnitTestsInPhp;

class Seeder
{
    public static function getOSTs(): array
    {
        $osts = [];
        $songs = [];
        $songs[] = new Song(1, 'Minecraft 1', 'C418', 1, 120);
        $songs[] = new Song(2, 'Minecraft 2', 'C418', 2, 130);
        $songs[] = new Song(3, 'Minecraft 3', 'C418', 3, 140);
        $songs[] = new Song(4, 'Minecraft 4', 'C418', 4, 150);
        $osts[] = new VideoGameOST(1, 'Minecraft OST', 'Minecraft', 2000, $songs);

        $songs = [];
        $songs[] = new Song(1, 'Terraria 1', 'XY', 1, 120);
        $songs[] = new Song(2, 'Terraria 2', 'XY', 2, 130);
        $songs[] = new Song(3, 'Terraria 3', 'XY', 3, 140);
        $songs[] = new Song(4, 'Terraria 4', 'XY', 4, 150);
        $osts[] = new VideoGameOST(2, 'Terraria OST', 'Terraria', 2000, $songs);

        $songs = [];
        $songs[] = new Song(1, 'WEBT 1', 'Raven', 1, 120);
        $songs[] = new Song(2, 'WEBT 2', 'Raven', 2, 130);
        $songs[] = new Song(3, 'WEBT 3', 'Raven', 3, 140);
        $songs[] = new Song(4, 'WEBT 4', 'Raven', 4, 150);
        $osts[] = new VideoGameOST(3, 'WEBT OST', 'WEBT JSON', 2000, $songs);

        return $osts;
    }
}

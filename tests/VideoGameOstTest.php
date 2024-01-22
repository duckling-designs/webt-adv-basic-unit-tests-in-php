<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\VideoGameOst;
use PHPUnit\Framework\TestCase;

class VideoGameOstTest extends TestCase
{
    public function testConstructor()
    {
        $ID = 1;
        $name = 'Test OST';
        $videogameName = 'Test Game';
        $releaseYear = 2022;
        $trackList = ['Track 1', 'Track 2'];

        $videoGameOst = new VideoGameOst($ID, $name, $videogameName, $releaseYear, $trackList);

        $this->assertEquals($ID, $videoGameOst->getID());
        $this->assertEquals($name, $videoGameOst->getName());
        $this->assertEquals($videogameName, $videoGameOst->getVideogameName());
        $this->assertEquals($releaseYear, $videoGameOst->getReleaseYear());
        $this->assertEquals($trackList, $videoGameOst->getTrackList());
    }

    public function testJsonSerialize()
    {
        $ID = 1;
        $name = 'Test OST';
        $videogameName = 'Test Game';
        $releaseYear = 2022;
        $trackList = ['Track 1', 'Track 2'];

        $videoGameOst = new VideoGameOst($ID, $name, $videogameName, $releaseYear, $trackList);

        $expectedJson = json_encode([
            'ID' => $ID,
            'name' => $name,
            'videogameName' => $videogameName,
            'releaseYear' => $releaseYear,
            'trackList' => $trackList,
        ]);

        $this->assertEquals($expectedJson, json_encode($videoGameOst));
    }
}

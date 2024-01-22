<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Song;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    public function testConstructor()
    {
        $ID = 1;
        $name = 'Test Song';
        $artist = 'Test Artist';
        $trackNumber = 1;
        $duration = '3:30';

        $song = new Song($ID, $name, $artist, $trackNumber, $duration);

        $this->assertEquals($ID, $song->getID());
        $this->assertEquals($name, $song->getName());
        $this->assertEquals($artist, $song->getArtist());
        $this->assertEquals($trackNumber, $song->getTrackNumber());
        $this->assertEquals($duration, $song->getDuration());
    }

    public function testJsonSerialize()
    {
        $ID = 1;
        $name = 'Test Song';
        $artist = 'Test Artist';
        $trackNumber = 1;
        $duration = '3:30';

        $song = new Song($ID, $name, $artist, $trackNumber, $duration);

        $expectedJson = json_encode([
            'ID' => $ID,
            'name' => $name,
            'artist' => $artist,
            'trackNumber' => $trackNumber,
            'duration' => $duration,
        ]);

        $this->assertEquals($expectedJson, json_encode($song));
    }
}

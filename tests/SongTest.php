<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Song;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    private ?Song $testSong;
    private int $ID = 1;
    private string $name = 'Test Song';
    private string $artist = 'Test Artist';
    private int $trackNumber = 1;
    private string $duration = '3:30';

    protected function setUp(): void
    {
        parent::setUp();;
        $this->testSong = new Song($this->ID, $this->name, $this->artist, $this->trackNumber, $this->duration);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(Song::class, $this->testSong);
        $this->assertEquals($this->ID, $this->testSong->getID());
        $this->assertEquals($this->name, $this->testSong->getName());
        $this->assertEquals($this->artist, $this->testSong->getArtist());
        $this->assertEquals($this->trackNumber, $this->testSong->getTrackNumber());
        $this->assertEquals($this->duration, $this->testSong->getDuration());
    }

    public function testJsonSerialize()
    {
        $expectedJson = json_encode([
            'ID' => $this->ID,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        ]);

        $this->assertEquals($expectedJson, json_encode($this->testSong));
    }
}

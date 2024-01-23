<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Song;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    private ?Song $testSong;
    private int $ID;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private string $duration;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ID = 1;
        $this->name = 'Test Song';
        $this->artist = 'Test Artist';
        $this->trackNumber = 1;
        $this->duration = '3:30';
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

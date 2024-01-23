<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Song;
use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\VideoGameOst;
use PHPUnit\Framework\TestCase;

class VideoGameOstTest extends TestCase
{
    private VideoGameOst $testOst;
    private int $ostId;
    private string $ostName;
    private string $videogameName;
    private int $releaseYear;
    private array $songData;
    private int $songId1;
    private string $songName1;
    private string $songArtist1;
    private int $songTrackNumber1;
    private string $songDuration1;
    private int $songId2;
    private string $songName2;
    private string $songArtist2;
    private int $songTrackNumber2;
    private string $songDuration2;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ostId = 1;
        $this->ostName = 'Test OST';
        $this->videogameName = 'Test Game';
        $this->releaseYear = 2022;

        $this->songId1 = 1;
        $this->songName1 = 'Test Song 1';
        $this->songArtist1 = 'Test Artist 1';
        $this->songTrackNumber1 = 1;
        $this->songDuration1 = '3:30';

        $this->songId2 = 2;
        $this->songName2 = 'Test Song 2';
        $this->songArtist2 = 'Test Artist 2';
        $this->songTrackNumber2 = 2;
        $this->songDuration2 = '4:00';

        $this->songData = [
            new Song($this->songId1, $this->songName1, $this->songArtist1, $this->songTrackNumber1, $this->songDuration1),
            new Song($this->songId2, $this->songName2, $this->songArtist2, $this->songTrackNumber2, $this->songDuration2),
        ];

        $this->testOst = new VideoGameOst($this->ostId, $this->ostName, $this->videogameName, $this->releaseYear, $this->songData);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(VideoGameOst::class, $this->testOst);
        $this->assertEquals($this->ostId, $this->testOst->getID());
        $this->assertEquals($this->ostName, $this->testOst->getName());
        $this->assertEquals($this->videogameName, $this->testOst->getVideogameName());
        $this->assertEquals($this->releaseYear, $this->testOst->getReleaseYear());

        $songs = $this->testOst->getTrackList();
        $this->assertCount(2, $songs);
        $this->assertInstanceOf(Song::class, $songs[0]);
        $this->assertInstanceOf(Song::class, $songs[1]);
    }

    public function testJsonSerialize()
    {
        $expectedJson = json_encode([
            'ID' => $this->ostId,
            'name' => $this->ostName,
            'videogameName' => $this->videogameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => [
                [
                    'ID' => $this->songId1,
                    'name' => $this->songName1,
                    'artist' => $this->songArtist1,
                    'trackNumber' => $this->songTrackNumber1,
                    'duration' => $this->songDuration1,
                ],
                [
                    'ID' => $this->songId2,
                    'name' => $this->songName2,
                    'artist' => $this->songArtist2,
                    'trackNumber' => $this->songTrackNumber2,
                    'duration' => $this->songDuration2,
                ],
            ],
        ]);

        $this->assertEquals($expectedJson, json_encode($this->testOst));
    }
}

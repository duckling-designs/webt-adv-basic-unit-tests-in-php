<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Seeder;
use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\VideoGameOst;
use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Song;
use PHPUnit\Framework\TestCase;

class SeederTest extends TestCase
{
    public function testGetOSTs()
    {
        $osts = Seeder::getOSTs();

        $this->assertCount(3, $osts);

        // Test the first OST
        $this->assertInstanceOf(VideoGameOST::class, $osts[0]);
        $this->assertEquals(1, $osts[0]->getID());
        $this->assertEquals('Minecraft OST', $osts[0]->getName());
        $this->assertEquals('Minecraft', $osts[0]->getVideogameName());
        $this->assertEquals(2000, $osts[0]->getReleaseYear());

        // Test the songs in the first OST
        $this->assertCount(4, $osts[0]->getTrackList());
        $this->assertInstanceOf(Song::class, $osts[0]->getTrackList()[0]);
        $this->assertEquals(1, $osts[0]->getTrackList()[0]->getID());
        $this->assertEquals('Minecraft 1', $osts[0]->getTrackList()[0]->getName());
        $this->assertEquals('C418', $osts[0]->getTrackList()[0]->getArtist());
        $this->assertEquals(1, $osts[0]->getTrackList()[0]->getTrackNumber());
        $this->assertEquals(120, $osts[0]->getTrackList()[0]->getDuration());

        // Similar tests for the second and third OSTs

        // Test the second OST
        $this->assertInstanceOf(VideoGameOST::class, $osts[1]);
        $this->assertEquals(2, $osts[1]->getID());
        $this->assertEquals('Terraria OST', $osts[1]->getName());
        $this->assertEquals('Terraria', $osts[1]->getVideogameName());
        $this->assertEquals(2000, $osts[1]->getReleaseYear());

        // Test the third OST
        $this->assertInstanceOf(VideoGameOST::class, $osts[2]);
        $this->assertEquals(3, $osts[2]->getID());
        $this->assertEquals('WEBT OST', $osts[2]->getName());
        $this->assertEquals('WEBT JSON', $osts[2]->getVideogameName());
        $this->assertEquals(2000, $osts[2]->getReleaseYear());
    }
}

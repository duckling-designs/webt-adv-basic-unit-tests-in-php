<?php

use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\Seeder;
use DucklingDesigns\WebtAdvBasicUnitTestsInPhp\VideoGameOst;
use PHPUnit\Framework\TestCase;

class SeederTest extends TestCase
{
    private ?array $seededOSTs;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seededOSTs = Seeder::getOSTs();
    }

    public function testGetOSTsCount()
    {
        $this->assertCount(3, $this->seededOSTs);
    }

    public function testFirstOST()
    {
        $firstOST = $this->seededOSTs[0];
        $this->assertInstanceOf(VideoGameOST::class, $firstOST);
        $this->assertEquals(1, $firstOST->getID());
        $this->assertEquals('Minecraft OST', $firstOST->getName());
        $this->assertEquals('Minecraft', $firstOST->getVideogameName());
        $this->assertEquals(2000, $firstOST->getReleaseYear());
    }

    public function testSecondOST()
    {
        $secondOST = $this->seededOSTs[1];
        $this->assertInstanceOf(VideoGameOST::class, $secondOST);
        $this->assertEquals(2, $secondOST->getID());
        $this->assertEquals('Terraria OST', $secondOST->getName());
        $this->assertEquals('Terraria', $secondOST->getVideogameName());
        $this->assertEquals(2000, $secondOST->getReleaseYear());
    }

    public function testThirdOST()
    {
        $thirdOST = $this->seededOSTs[2];
        $this->assertInstanceOf(VideoGameOST::class, $thirdOST);
        $this->assertEquals(3, $thirdOST->getID());
        $this->assertEquals('WEBT OST', $thirdOST->getName());
        $this->assertEquals('WEBT JSON', $thirdOST->getVideogameName());
        $this->assertEquals(2000, $thirdOST->getReleaseYear());
    }
}

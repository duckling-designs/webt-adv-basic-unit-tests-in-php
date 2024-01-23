<?php
namespace DucklingDesigns\WebtAdvBasicUnitTestsInPhp;

class Song implements \JsonSerializable {
    private int $ID;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private string $duration;

    public function getID(): int
    {
        return $this->ID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param int $ID
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param string $duration
     */
    public function __construct(int $ID, string $name, string $artist, int $trackNumber, string $duration)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    public function jsonSerialize(): array {
        return array (
            'ID' => $this->ID,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        );    }
}
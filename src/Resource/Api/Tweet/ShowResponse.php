<?php

namespace APIPHP\Boilerplate\Resource\Api\Tweet;

use APIPHP\Boilerplate\Resource\ApiResponse;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class ShowResponse implements ApiResponse
{
    private $message;

    private $user;

    private $hashtags;

    private $location;

    private $createdAt;

    /**
     * @param string    $message
     * @param string    $user
     * @param string    $location
     * @param array     $hashtags
     * @param \DateTime $createdAt
     */
    private function __construct(string $message, string $user, string $location, array $hashtags, \DateTime $createdAt)
    {
        $this->message = $message;
        $this->user = $user;
        $this->hashtags = $hashtags;
        $this->location = $location;
        $this->createdAt = $createdAt;
    }

    public static function create(array $data)
    {
        // TODO some validation on input

        return new self($data['message'], $data['user'], $data['location'], $data['hashtags'], new \DateTime($data['timestamp']));
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getHashtags(): array
    {
        return $this->hashtags;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
}

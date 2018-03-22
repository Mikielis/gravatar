<?php

namespace Mikielis\Gravatar;


/**
 * Class Gravatar
 * @package Mikielis\Gravatar
 */
class Gravatar
{
    /**
     * Base URL
     *
     * @var string
     */
    private $baseUrl = 'https://www.gravatar.com/avatar/';

    /**
     * Default size
     *
     * @var int
     */
    private $size = 80;

    /**
     * Get Gravatar URL
     *
     * @param string $email
     * @param int/null $size
     * @return string
     * @throws \Exception
     */
    public function getUrl($email, $size = null)
    {
        if ($this->validateEmail($email)) {
            return $this->buildUrl($email, $size);
        }

        throw new \Exception('Invalid format of the given email address: ' . $email);
    }

    /**
     * Get URLs of Gravatars
     *
     * @param array $emails ['email1@example.com', 'email2@example.com']
     * @param int/null $size
     * @return array [['email' => 'email1@example.com', 'gravatar' => 'https://www.gravatar.com/avatar/'], ...]
     * @throws \Exception
     */
    public function getUrls($emails, $size = null)
    {
        $list = [];

        if (is_array($emails)) {
            foreach ($emails as $email) {
                if ($this->validateEmail($email)) {
                   $list[] = [
                       'email' => $email,
                       'gravatar' => $this->buildUrl($email, $size)
                   ];
                } else {
                    throw new \Exception('Invalid format of the given email address: ' . $email);
                }
            }

            return $list;
        }

        throw new \Exception('No array given');
    }

    /**
     * Validate email address
     *
     * @param $email
     * @return bool
     */
    private function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return true;
        }

        return false;
    }

    /**
     * Build gravatar URL
     *
     * @param string $email
     * @param int/null $size
     * @return string
     */
    private function buildUrl($email, $size = null)
    {
        if (!$size || !is_int($size)) {
            $size = $this->size;
        }

        $url = $this->baseUrl . md5(strtolower(trim($email))) . '?size=' . $size;
        
        return $url;
    }
}
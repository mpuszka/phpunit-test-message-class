<?php
declare(strict_types=1);

namespace App\Message;

/**
 * Message class
 */
class Message
{   
    /**
     * Message title
     *
     * @var string
     */
    private $title;

    /**
     * Message body
     *
     * @var string
     */
    private $body;

    /**
     * Message status
     *
     * @var boolean
     */
    private $status = false;

    /**
     * Email address
     *
     * @var string
     */
    private $email;

    /**
     * Constructor
     *
     * @param string $title
     * @param string $body
     */
    public function __construct(string $title, string $body) 
    {
        $this->title    = $title;
        $this->body     = $body;
    }

    /**
     * Get message title
     *
     * @return string
     */
    public function getTitle(): string 
    {
        return $this->title;
    }

    /**
     * Set message title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void 
    {
        $this->title = $title;
    }

    /**
     * Get message body
     *
     * @return string
     */
    public function getBody(): string {
        return $this->body;
    }

    /**
     * Set message body
     *
     * @param string $body
     * @return void
     */
    public function setBody(string $body): void 
    {
        $this->body = $body;
    }

    /**
     * Get message status
     *
     * @return boolean
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * Change message status
     *
     * @return void
     */
    public function setStatus(): void 
    {
        $this->status = true;
    }

    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail(): string 
    {
        return $this->email;
    }

    /**
     * Set email address
     *
     * @param string $email
     * @return boolean
     */
    public function setEmail(string $email): bool 
    {   
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;

            return true;
        }
        
        return false;
    }
}

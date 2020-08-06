<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Message\Message;

/**
 * MessageTest class
 */
class MessageTest extends TestCase 
{   
    /**
     * Message instance
     *
     * @var obj
     */
    private $message;

    /**
     * Test message title
     *
     * @var string
     */
    private $title  = 'Title message';

    /**
     * Test message body
     *
     * @var string
     */
    private $body   = 'Body message';

    /**
     * SetUp method
     *
     * @return void
     */
    public function setUp(): void 
    {
        $this->message = new Message('Title message', 'Body message');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void 
    {
        $this->message = NULL;
    }

    /**
     * Test message value
     *
     * @return void
     */
    public function testGetTitle(): void 
    {
        $this->assertSame($this->title, $this->message->getTitle());
    }

    /**
     * Test get private property title
     *
     * @return void
     */
    public function testGetPrivateTitleProperty(): void
    {
        $this->expectException(Error::class);
        $this->message->title;
    }

    /**
     * Test set title integer value
     *
     * @return void
     */
    public function testSetTitleInteger(): void {
        $this->expectException(TypeError::class);
        $this->message->setTitle(1);
    }

    /**
     * Test body value
     *
     * @return void
     */
    public function testGetBody(): void 
    {
        $this->assertSame($this->body, $this->message->getBody());
    }

    /**
     * Test get private property body
     *
     * @return void
     */
    public function testGetPrivateBodyProperty(): void
    {
        $this->expectException(Error::class);
        $this->message->body;
    }

    /**
     * Test set body integer value
     *
     * @return void
     */
    public function testSetBodyInteger(): void {
        $this->expectException(TypeError::class);
        $this->message->setBody(1);
    }

    /**
     * Test check status
     *
     * @return void
     */
    public function testCheckStatus(): void 
    {
        $this->assertSame($this->message->getStatus(), false);
        $this->message->setStatus(true);
        $this->assertSame($this->message->getStatus(), true);
        $this->message->setStatus(true);
        $this->assertSame($this->message->getStatus(), true);
    }

    /**
     * Test get private property email
     *
     * @return void
     */
    public function testGetPrivateEmailProperty(): void 
    {   
        $this->expectException(Error::class);
        $this->message->email;
        
    }

    /**
     * Test email type
     *
     * @return void
     */
    public function testEmailType(): void 
    {   
        $this->expectException(TypeError::class);
        $this->message->getEmail();
        $this->message->setEmail(1234);
        
    }

    /**
     * Test email validation
     *
     * @return void
     */
    public function testEmailValidation(): void 
    {
        $this->assertSame($this->message->setEmail('test'), false);
        $this->assertSame($this->message->setEmail('test@test.com'), true);
    }
    
}
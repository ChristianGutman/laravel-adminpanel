<?php

namespace Tests\Unit\Http\Requests\Backend\BlogTags;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\Backend\BlogTags\UpdateBlogTagsRequest
 */
class UpdateBlogTagsRequestTest extends TestCase
{
    /** @var \App\Http\Requests\Backend\BlogTags\UpdateBlogTagsRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\Backend\BlogTags\UpdateBlogTagsRequest();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->rules();

        $this->assertEquals([], $actual);
    }

    /**
     * @test
     */
    public function messages()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->messages();

        $this->assertEquals([], $actual);
    }

    // test cases...
}

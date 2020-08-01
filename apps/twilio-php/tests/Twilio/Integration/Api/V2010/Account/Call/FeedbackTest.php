<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Api\V2010\Account\Call;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class FeedbackTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->feedback()->create(1);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['QualityScore' => 1, ];

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Calls/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Feedback.json',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Thu, 20 Aug 2015 21:45:46 +0000",
                "date_updated": "Thu, 20 Aug 2015 21:45:46 +0000",
                "issues": [
                    "imperfect-audio",
                    "post-dial-delay"
                ],
                "quality_score": 5,
                "sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->feedback()->create(1);

        $this->assertNotNull($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->feedback()->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Calls/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Feedback.json'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Thu, 20 Aug 2015 21:45:46 +0000",
                "date_updated": "Thu, 20 Aug 2015 21:45:46 +0000",
                "issues": [
                    "imperfect-audio",
                    "post-dial-delay"
                ],
                "quality_score": 5,
                "sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->feedback()->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->feedback()->update(1);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['QualityScore' => 1, ];

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Calls/CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Feedback.json',
            null,
            $values
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Thu, 20 Aug 2015 21:45:46 +0000",
                "date_updated": "Thu, 20 Aug 2015 21:45:46 +0000",
                "issues": [
                    "imperfect-audio",
                    "post-dial-delay"
                ],
                "quality_score": 5,
                "sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->calls("CAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->feedback()->update(1);

        $this->assertNotNull($actual);
    }
}
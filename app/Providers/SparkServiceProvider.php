<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Engineering Mastered',
        'product' => 'FlipIt Physics Answers',
        'street' => '2900 1st Ave APT N302',
        'location' => 'Seattle, WA 98121',
        'phone' => '217-766-4628',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = 'nikhil@bloggercasts.com';

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'nikhil@bloggercasts.com'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = false;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
//        Spark::useStripe()->noCardUpFront()->trialDays(10);
        Spark::useStripe();

//        Spark::freePlan()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);

        Spark::plan('FlipIt Physics Answers', 'fpa-monthly')
            ->price(9.99)
            ->features([
                'Full Access',
                'Cancel Anytime'
            ]);

        Spark::plan('FlipIt Physics Answers','fpa-yearly')
            ->price(71.93)
            ->yearly()
            ->features([
                'Full Access',
                '40% Discount'
            ]);
    }
}

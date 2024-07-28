<?php

namespace App\Scheduler;
use App\Message\GetInfo;
use Symfony\Component\Scheduler\Schedule;
use Symfony\Component\Scheduler\Scheduler;
use Symfony\Component\Scheduler\RecurringMessage;
use Symfony\Component\Scheduler\Attribute\AsSchedule;
use Symfony\Component\Scheduler\ScheduleProviderInterface;
use Symfony\Component\Scheduler\Trigger\CronExpressionTrigger;
use App\MessageHandler\GetInfoHandler;

#[AsSchedule('getInfo')]
class MainSchedule implements ScheduleProviderInterface
{
    public function getSchedule(): Schedule
    {
        $schedule = (new Schedule())->add(
            RecurringMessage::every('50 seconds', new GetInfo()),
        );


        /*$scheduler = new Scheduler(handlers: [
            GetInfo::class,
            // add more handlers if you have more message types
        ], schedules: [
            $schedule,
            // the scheduler can take as many schedules as you need
        ]);

        // finally, run the scheduler once it's ready
        $scheduler->run();*/

        return $schedule;
    }
}
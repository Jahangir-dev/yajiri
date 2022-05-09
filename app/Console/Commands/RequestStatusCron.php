<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PublishRequest;
use Carbon\Carbon;
class RequestStatusCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request_expiry:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $req = PublishRequest::where('created_at', '<=', Carbon::now()->subDays(30)->toDateTimeString())->where('status',1)->where('close',0)->where('cancel',0)->where('confirm_status',1)->get();

        foreach($req as $re){

            $re->close = 1;
            $re->save();

        }
    }
}

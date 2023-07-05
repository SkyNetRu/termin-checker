<?php

namespace App\Console\Commands;

use App\Models\TerminUrlModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class termin_checker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'termin_checker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if termin available';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $context = stream_context_create(
            array(
                "http" => array(
                    "max_redirects" => 101,
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );

        $url = TerminUrlModel::first()->url;
        $html = file_get_contents($url, false, $context);
        $needle = 'Leider sind aktuell keine Termine für ihre Auswahl verfügbar';
        $needle2 = 'Wartung';

        if (strripos($html, $needle) === false && strripos($html, $needle2) === false) {
            Mail::send('emails.termin-notify', ['termin_url' => $url], function($message)
            {
                $message->to(config('termin.notify_email'), config('termin.notify_name'))
                    ->subject('We have termin, please check it now!');
            });
        }
    }
}

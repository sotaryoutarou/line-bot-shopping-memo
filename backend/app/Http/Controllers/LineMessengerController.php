<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineMessengerController extends Controller
{
    /**
     * revieve line events
     *
     * @param  Request $request
     * @return void
     */
    public function webhook(Request $request) {
        foreach ($request->events as $event) {
            if ($event['type'] === 'message') {
                Memo::create([
                    'content' => $event['message']['text'],
                    'line_user_id' => $event['source']['userId']
                ]);

                $memos = Memo::all();

                $bot = app('line-bot');
                $result = $bot->replyText($event['replyToken'], $memos->implode('content', "\n"));
            }
        }

    }

    /**
     * lineメッセージ受信用
     *
     * @param  Request $request
     * @return void
     */
    public function message(Request $request) {

    }
}
